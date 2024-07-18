<?php

namespace App\Controllers;

use App\Models\Models;

class Admin extends BaseController
{

    public function index()
    {
        $session = session();
        if ($session->get('status login') !== 'login') {
            return redirect()->to('Admin/Login');
        } else {
            return view('Admin/Dashboard');
        }
    }

    public function Form_Upload()
    {
        $session = session();
        if ($session->get('status login') !== 'login') {
            return redirect()->to('Admin/Login');
        } else {
            return view('Admin/Upload');
        }
    }
    public function Login()
    {
        return view('Admin/Login');
    }
    public function Register()
    {
        return view('Admin/Register');
    }

    public function log()
    {
        $session = session();
        $username = $this->request->getpost('uname');
        $pass = $this->request->getpost('pass');

        $db      = \Config\Database::connect();
        $query = $db->table('user')->where(['username' => $username, 'password' => md5($pass)])->get();

        if ($query->getNumRows() > 0) {

            $row = $query->getRow();
            $data = [
                'kd_user' => $row->kd_user,
                'nama' => $row->nama,
                'token' => $row->token,
                'status login' => 'login'
            ];
            $session->set($data);
            return redirect()->to(base_url('Admin/index'));
        } else {
            $msg = 'Username atau Password Salah';
            return redirect()->to(base_url('Admin/Login'))->with('error', $msg);
        }
    }

    public function reg()
    {
        date_default_timezone_set('asia/jakarta');
        $uname = $this->request->getpost('uname');
        $pass = $this->request->getpost('pass');
        $nama = $this->request->getpost('nama');
        $kode = 'U' . date('mdhis', strtotime(' + 1 day')) . '01';
        $tok = md5($kode);

        $db      = \Config\Database::connect();
        $query = $db->table('user')->where(['username' => $uname])->get();

        if ($query->getNumRows() == 0) {
            $simpan_data = array(
                'username' => $uname,
                'password' => md5($pass),
                'nama' => $nama,
                'token' => $tok
            );
            $model = new Models();
            $model->reg($simpan_data);
            return view('Admin/login');
        } elseif ($query->getNumRows() > 0) {
            $msg = 'Username ini sudah terdaftar';
            return redirect()->to(base_url('Admin/Register'))->with('e1', $msg);
        } else {
            $msg = 'Unknown Error';
            return redirect()->to(base_url('Admin/Register'))->with('e2', $msg);
        }
    }

    public function Upload()
    {
        $session = session();
        date_default_timezone_set('Asia/Jakarta');
        if ($this->request->getFileMultiple('images')) {
            foreach ($this->request->getFileMultiple('images') as $file) {

                if ($file->getName() == null) {
                    $msg = 'Tidak Ada Foto atau Video yang Diunggah';
                    return redirect()->to(base_url('Admin/Form_Upload'))->with('e2', $msg);
                } elseif (!in_array($file->getClientMimeType(), ['image/png', 'image/jpg', 'image/jpeg', 'video/mp4'])) {
                    $msg = 'Format Foto atau Video Tidak Valid. <br> Format yang Diperbolehkan .png .jpg .mp4';
                    return redirect()->to(base_url('Admin/Form_Upload'))->with('e1', $msg);
                } else {
                    $newName = $file->getRandomName();
                    $file->move(FCPATH . '/uploads/', $newName);

                    $mediaModel = new Models();
                    $data = [
                        'media_filename' => $file->getName(),
                        'media_filetype' => $file->getClientMimeType(),
                        'media_filepath' => 'public/uploads/' . $newName,
                        'media_uploaddate' => date("Y-m-d H:i:s"),
                        'kd_user' => $_SESSION['kd_user']
                    ];
                    $mediaModel->savedata($data);
                }
            }
            $msg = 'Files have been successfully uploaded';
            return redirect()->to(base_url('Admin/Form_Upload'))->with('msg', $msg);
        }
    }

    public function List()
    {
        $session = session();
        if ($session->get('status login') !== 'login') {
            return redirect()->to('Admin/Login');
        } else {
            $model = new Models();
            $data['media'] = $model->getnama();
            return view('Admin/List', $data);
        }
    }

    public function delete($id)
    {
        $data_filter = array(
            'media_filename' => $id
        );
        $model = new Models();
        $model->deletedata($data_filter);

        unlink(FCPATH . '/uploads/' . $id);
        return redirect()->to('Admin/List');
    }

    public function Logout()
    {
        // Access the session service
        $session = session();

        // Destroy the session
        $session->destroy();

        // Redirect to the login page or another page
        return redirect()->to('Admin/Login');
    }
}
