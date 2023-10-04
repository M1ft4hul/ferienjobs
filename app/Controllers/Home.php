<?php

namespace App\Controllers;

use App\Models\UserM;


class Home extends BaseController
{
    public function index()
    {
        return view('index');
    }
    public function admin()
    {
        return view('admin');
    }

    public function privacy()
    {
        return view('privacy');
    }

    public function data_kandidat()
    {
        $kandidat = $this->UserM->where('level', 1)->orderby('created_at', 'desc')->get()->getResult();
        $data = [
            'kandidat' => $kandidat,
        ];
        return view('data_kandidat', $data);
    }
    public function data_koordinator()
    {
        // $koordinator = $this->UserM->where('level', 0)->get()->getResult();
        $koordinator = $this->UserM->data_koord()->getResult();

        $data = [
            'koordinator' => $koordinator,
        ];
        return view('data_koordinator', $data);
    }
    public function login()
    {
        return view('login');
    }

    // ubah password
    public function LupaPass()
    {
        $validation = \Config\Services::validation();
        $data = [
            'title' => 'Lupa Password | Ferienjobs',
            'validation' => $validation
        ];
        return view('lupa_password', $data);
    }

    public function send_email()
    {
        if ($this->validate([
            'email' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Email Wajib Diisi',
                ]
            ],
        ])) {
            $email = $this->request->getPost('email');

            $UserM = new UserM();
            $user = $UserM->where('email', $email)->first();
            if (!$user) {
                session()->setFlashdata('pesan', "Emailnya Tidak Ditemukan.");
                return redirect()->to(base_url('/LupaPass'))->withInput();
            }

            session()->set('email', $email);

            return redirect()->to(base_url('/reset_password/new_password'));
        } else {
            $validation = \Config\Services::validation();
            return redirect()->to(base_url('/LupaPass'))->withInput()->with('errors', $validation->getErrors());
        }
    }

    public function new_password()
    {
        $email = session('email');
        if (!$email) {
            return redirect()->to('/LupaPass');
        }

        $data = [
            'email' => $email,
            'title' => 'Ubah Sandi | Login'
        ];

        return view('new_password', $data);
    }

    public function update_password()
    {
        $validationRules = [
            'password' => [
                'rules' => 'required|min_length[6]',
                'errors' => [
                    'required' => 'Password Wajib Diisi',
                    'min_length' => 'Password minimal harus terdiri dari 6 karakter'
                ]
            ]
        ];

        if ($this->validate($validationRules)) {
            $email = session('email');
            $newPassword = password_hash($this->request->getVar('password'), PASSWORD_DEFAULT);

            $user = $this->UserM->where('email', $email)->first();
            if (!$user) {
                session()->setFlashdata('rusak', 'Password tidak bisa diubah!');
                return redirect()->to(base_url('/reset_password/new_password'))->withInput();
            }

            $this->UserM->update($user['id'], ['password' => $newPassword]);

            session()->remove('email');

            session()->setFlashdata('pesan', 'Kata sandi Anda telah berhasil diubah. Anda sekarang dapat masuk dengan kata sandi baru Anda!');
            return redirect()->to(base_url('/login'));
        } else {
            $validation = \Config\Services::validation();
            return redirect()->to(base_url('/reset_password/new_password'))->withInput()->with('errors', $validation->getErrors());
        }
    }
    // ubah password end

    public function koordinator()
    {
        return view('koordinator');
    }
    public function kandidat()
    {
        $data = [
            'validation' => \Config\Services::validation(),
        ];
        return view('kandidat', $data);
    }
    public function dokumen()
    {
        return view('dokumen');
    }
    public function partner()
    {
        return view('partner');
    }
    public function profil()
    {
        $cek = $this->UserM->data_kandidat(session()->get('kode_user'))->getResult();
        $kredit = $this->UserM->where('kode_user', session()->get('kode_user'))->get()->getRow();
        // $total = 0;
        // $total += $kredit->kredit;
        $user = $this->UserM->find(session()->get('id'));

        $data = [
            'user' => $user,
            'kandidat' => $cek,
            'kredit' => $kredit,
        ];
        return view('profil', $data);
    }
    public function hapusKoordinator($id)
    {
        $data = [
            'id' => $id,
        ];
        $this->UserM->deleteData($data);
        session()->setFlashdata('hapus_berhasil', 'Data Terhapus!');
        return redirect()->to(base_url('/login'));
    }
    public function profil_kandidat()
    {
        $dataku = $this->UserM->where('id', session()->get('id'))->get()->getRow();
        $koordinator = $this->UserM->where('kode_user', $dataku->kode_upline)->get()->getRow();

        $data = [
            'koordinator' => $koordinator,
            'dataku' => $dataku,
            'validation' => \Config\Services::validation(),
        ];
        return view('profil_kandidat', $data);
    }

    public function hapus($id)
    {
        $data = [
            'id' => $id,
        ];
        $this->UserM->deleteData($data);
        session()->setFlashdata('hapus', 'Data Terhapus!');
        return redirect()->to(base_url('/login'));
    }

    public function simpan_koordinator()
    {
        $email = $this->request->getVar('email', FILTER_SANITIZE_EMAIL);
        $cek = $this->UserM->where('email', $email)->get()->getRow();
        if ($cek) {
            $this->session->setFlashdata('pesan', "Email ini sudah pernah terdaftar, mohon ganti.");
            return redirect()->to('/koordinator');
        }
        $nama = strtoupper($this->request->getVar('nama'));
        $pekerjaan = $this->request->getVar('pekerjaan');
        $password = password_hash($this->request->getVar('password'), PASSWORD_DEFAULT);


        $hp = $this->request->getVar('hp');
        $wa = $this->request->getVar('wa');
        $jk = $this->request->getVar('jk');


        $permitted_chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $kode_koordinator = substr(str_shuffle($permitted_chars), 0, 6);

        $this->UserM->save([
            'kode_user' => $kode_koordinator,
            'nama' => $nama,
            'pekerjaan' => $pekerjaan,
            'email' => $email,
            'password' => $password,
            'hp' => $hp,
            'wa' => $wa,
            'jk' => $jk,
        ]);
        $this->session->setFlashdata('pesan', "Berhasil mendaftar, harap menunggu verifikasi.");
        return redirect()->to('/login');
    }
    public function gantistatus()
    {

        $status = $this->request->getVar('status_user'); //0-2
        if ($status == '2') {
            $kredit = '10000';
        } elseif ($status == '4') {
            $kredit = '130000';
        } elseif ($status == '7') {
            $kredit = '230000';
        } else {
            $kredit = '0';
        }
        $id = $this->request->getVar('id_userstatus'); //id user kandidat
        $cek = $this->UserM->where('id', $id)->get()->getRow(); //cek di tabel user
        if (!$cek) {
            session()->destroy();
            return redirect()->to('/');
        }

        $cek_kandidat = $this->SaldoM->where('id', $id)->get()->getRow();


        if (!$cek_kandidat) {
            $this->SaldoM->insert([
                'id' => $id,
                'kode_koord' => $cek->kode_upline,
                'saldo' => $kredit,
            ]);
        } else {
            $this->SaldoM->save([
                'id' => $id,
                'saldo' => $kredit,
            ]);
        }
        $this->UserM->save([
            'id' => $id,
            'status_kandidat' => $status,
        ]);

        $cek_user = $this->UserM->where('kode_user', $cek->kode_upline)->get()->getRow();
        $hitung = $this->UserM->saldo($cek_user->kode_user)->get()->getRow();
        $total = 0;
        $total += $hitung->saldo;
        $this->UserM->save([
            'id' => $cek_user->id,
            'kredit' => $total,
        ]);

        return redirect()->to('/data-kandidat ');
    }
    public function gantistatus_koord()
    {


        $status = $this->request->getVar('status_user');
        $id = $this->request->getVar('id_userstatus');

        $cek = $this->UserM->where('id', $id)->get()->getRow();
        if (!$cek) {
            session()->destroy();
            return redirect()->to('/');
        }

        $this->UserM->save([
            'id' => $id,
            'aktif' => $status,
        ]);

        return redirect()->to('/data-koordinator ');
    }
    public function simpan_kandidat()
    {

        if (!$this->validate([

            'kode' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Kode Koordinator tidak boleh kosong',
                ]
            ],
            'nama' => [
                'rules' => 'trim|required|min_length[3]',
                'errors' => [
                    'required' => 'Nama minimal 3 karakter',
                    'min_length' => 'Nama minimal 3 karakter',
                ]
            ],
            'jk' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Jenis kelamin tidak boleh kosong',
                ]
            ],
            'tempatlahir' => [
                'rules' => 'trim|required|min_length[3]',
                'errors' => [
                    'required' => 'Tempat lahir minimal 3 karakter',
                    'min_length' => 'Tempat lahir minimal 3 karakter',
                ]
            ],
            'tgllahir' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Tanggal tidak boleh kosong.',
                ]
            ],
            'univ' => [
                'rules' => 'trim|required|min_length[3]',
                'errors' => [
                    'required' => 'Universitas minimal 3 karakter.',
                    'min_length' => 'Universitas minimal 3 karakter',
                ]
            ],
            'baju' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Baju tidak boleh kosong.',
                ]
            ],
            'celana' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Celana tidak boleh kosong.',
                ]
            ],
            'sepatu' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Sepatu tidak boleh kosong.',
                ]
            ],
            'vaksin' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Vaksin tidak boleh kosong.',
                ]
            ],
            'alamat' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Alamat tidak boleh kosong.',
                ]
            ],
            'email' => [
                'rules' => 'trim|required|valid_email|is_unique[tb_user.email]',
                'errors' => [
                    'required' => 'Email tidak boleh kosong.',
                    'valid_email' => 'Harus menggunakan format email yang benar.',
                    'is_unique' => 'Email sudah pernah didaftarkan.',
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Password tidak boleh kosong.',
                ]
            ],
            'hp' => [
                'rules' => 'trim|required|min_length[10]|max_length[13]',
                'errors' => [
                    'required' => 'Nomor HP 10-13 digit.',
                    'min_length' => 'Nomor HP 10-13 digit.',
                    'max_length' => 'Nomor HP 10-13 digit.',
                ]
            ],
            'wa' => [
                'rules' => 'trim|required|min_length[10]|max_length[13]',
                'errors' => [
                    'required' => 'Nomor WA 10-13 digit.',
                    'min_length' => 'Nomor WA 10-13 digit.',
                    'max_length' => 'Nomor WA 10-13 digit.',
                ]
            ],

        ])) {
            return redirect()->to(base_url('/kandidat'))->withInput();
        }

        $kode = strtoupper($this->request->getVar('kode'));
        $cek_kode = $this->UserM->where('kode_user', $kode)->get()->getRow();

        if (!$cek_kode) {
            $this->session->setFlashdata('pesan', "Kode Koordinator tidak ditemukan.");
            return redirect()->to(base_url('/kandidat'))->withInput();
        }

        $email = $this->request->getVar('email', FILTER_SANITIZE_EMAIL);

        $nama = strtoupper($this->request->getVar('nama'));
        $jk = $this->request->getVar('jk');
        $tempatlahir = strtoupper($this->request->getVar('tempatlahir'));
        $tgllahir = $this->request->getVar('tgllahir');
        $baju = $this->request->getVar('baju');
        $celana = $this->request->getVar('celana');
        $sepatu = $this->request->getVar('sepatu');
        $vaksin = $this->request->getVar('vaksin');
        $alamat = $this->request->getVar('alamat');
        $univ = strtoupper($this->request->getVar('univ'));

        $password = password_hash($this->request->getVar('password'), PASSWORD_DEFAULT);
        $hp = $this->request->getVar('hp');
        $wa = $this->request->getVar('wa');


        $this->UserM->save([
            'nama' => $nama,
            'kode_upline' => $kode,
            'email' => $email,
            'tempatlahir' => $tempatlahir,
            'tgllahir' => $tgllahir,
            'baju' => $baju,
            'celana' => $celana,
            'sepatu' => $sepatu,
            'vaksin' => $vaksin,
            'password' => $password,
            'alamat' => $alamat,
            'hp' => $hp,
            'wa' => $wa,
            'jk' => $jk,
            'universitas' => $univ,
            'level' => true,
        ]);

        $this->session->setFlashdata('pesan', "Berhasil mendaftar, harap menunggu verifikasi.");
        return redirect()->to('/login ');
    }

    public function cek_login()
    {

        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $data = $this->UserM->where('email', $email)->get()->getRow();

        if ($data) {
            if ($data->aktif == 1) {
                session()->setFlashdata('pesan', 'Maaf, Akun Anda telah dinonaktifkan. Silahkan hubungi Admin.');
                return redirect()->to('/login');
            }

            $pass = $data->password;
            $verify_pass = password_verify($password, $pass);
            if ($verify_pass) {
                $ses_data = [
                    'id'            => $data->id,
                    'nama'          => $data->nama,
                    'email'         => $data->email,
                    'wa'            => $data->wa,
                    'kode_user'     => $data->kode_user,
                    'level'         => $data->level,
                    'logged_in'     => TRUE
                ];
                $this->session->set($ses_data);

                switch ($data->level) {
                    case 0:
                        return redirect()->to('/profil');
                        break;
                    case 1:
                        return redirect()->to('/profil-kandidat');
                        break;
                    case 9:
                        return redirect()->to('/admin');
                        break;
                }
            } else {
                session()->setFlashdata('pesan', 'Password salah mohon periksa kembali.');
                return redirect()->to('/login')->withInput();
            }
        } else {
            session()->setFlashdata('pesan', 'Akun belum terdaftar. Silahkan daftar akun terlebih dahulu.');
            return redirect()->to('/login');
        }
    }
    public function hapus_kandidat()
    {

        $id = $this->request->getVar('id_hapususer');
        $hapus_user = $this->UserM->where('id', $id)->get()->getRow();

        if (!$hapus_user) {
            session()->destroy();
            return redirect()->to('/');
        }
        // $this->UserM->delete(['id' => $id]);
        $this->UserM->where('id', $id)->delete();

        return redirect()->to('/data-kandidat');
    }

    public function terms()
    {
        return view('terms');
    }
    public function Logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
