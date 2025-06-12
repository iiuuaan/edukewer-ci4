<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class QuizQuestionsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id' => '1',
                'course_id' => '1',
                'module_number' => '1',
                'question' =>                      'Apa itu variabel?',
                'option_a' =>                      'Fungsi khusus',
                'option_b' =>                      'Penyimpanan data',
                'option_c' =>                      'Konstanta',
                'correct_option' =>                'b'
            ],
            [
                'id' => '2',
                'course_id' => '1',
                'module_number' => '1',
                'question' =>                     'Bahasa pemrograman mana yang digunakan untuk pengembangan web?',
                'option_a' =>                     'JavaScript',
                'option_b' =>                     'C++',
                'option_c' =>                     'Pascal',
                'correct_option' =>               'a'
            ],
            [
                'id' => '3',
                'course_id' => '1',
                'module_number' => '1',
                'question' =>                    'Apa itu tipe data?',
                'option_a' =>                    'Jenis variabel',
                'option_b' =>                    'Nama fungsi',
                'option_c' =>                    'Operator matematika',
                'correct_option' =>              'a'
            ],
            [
                'id' => '4',
                'course_id' => '1',
                'module_number' => '1',
                'question' =>                   'Simbol apa yang digunakan untuk komentar satu baris di Python?',
                'option_a' =>                   '// ',
                'option_b' =>                   '<!-- --> ',
                'option_c' =>                   '# ',
                'correct_option' =>             'c'
            ],
            [
                'id' => '5',
                'course_id' => '1',
                'module_number' => '1',
                'question' =>                  'Apa itu algoritma?',
                'option_a' =>                  'Kumpulan instruksi untuk menyelesaikan masalah',
                'option_b' =>                  'Variabel dalam program',
                'option_c' =>                  'Komputer generasi baru',
                'correct_option' => 'a'
            ],
            [
                'id' => '6',
                'course_id' => '1',
                'module_number' => '1',
                'question' =>                 'Pernyataan percabangan ditulis dengan kata kunci apa di Python?',
                'option_a' =>                 'while',
                'option_b' =>                 'if',
                'option_c' =>                 'for',
                'correct_option' =>           'b'
            ],
            [
                'id' => '7',
                'course_id' => '1',
                'module_number' => '1',
                'question' =>                'Fungsi apa yang digunakan untuk mencetak output di Python?',
                'option_a' =>                'echo()',
                'option_b' =>                'print()',
                'option_c' =>                'println()',
                'correct_option' =>          'b'
            ],
            [
                'id' => '8',
                'course_id' => '1',
                'module_number' => '1',
                'question' =>               'Nilai boolean terdiri dari?',
                'option_a' =>               '0 dan 1',
                'option_b' =>               'true dan false',
                'option_c' =>               'string dan integer',
                'correct_option' =>         'b'
            ],
            [
                'id' => '9',
                'course_id' => '1',
                'module_number' => '1',
                'question' =>              'Untuk mengulang perintah, kita bisa menggunakan?',
                'option_a' =>              'switch',
                'option_b' =>              'loop',
                'option_c' =>              'break',
                'correct_option' =>        'b'
            ],
            [
                'id' => '10',
                'course_id' => '1',
                'module_number' => '1',
                'question' =>             'Apa arti dari syntax error?',
                'option_a' =>             'Kesalahan logika',
                'option_b' =>             'Kesalahan penulisan kode',
                'option_c' =>             'Kesalahan pada hardware',
                'correct_option' =>       'b'
            ],
            [
                'id' => '11',
                'course_id' => '1',
                'module_number' => '2',
                'question' =>                   'Apa itu variabel dalam pemrograman?',
                'option_a' =>                   'Proses menjalankan program',
                'option_b' =>                   'Tempat menyimpan nilai/data',
                'option_c' =>                   'Tanda kurung dalam kode',
                'correct_option' =>             'b'
            ],
            [
                'id' => '12',
                'course_id' => '1',
                'module_number' => '2',
                'question' =>                   'Variabel digunakan untuk...',
                'option_a' =>                   'Menyimpan data sementara dalam program',
                'option_b' =>                   'Menampilkan output ke layar',
                'option_c' =>                   'Menjalankan sistem operasi',
                'correct_option' =>             'a'
            ],
            [
                'id' => '13',
                'course_id' => '1',
                'module_number' => '2',
                'question' =>                   'Contoh data yang termasuk tipe data teks adalah...',
                'option_a' =>                   '42',
                'option_b' =>                   '"Halo Dunia"',
                'option_c' =>                   'true',
                'correct_option' =>             'b'
            ],
            [
                'id' => '14',
                'course_id' => '1',
                'module_number' => '2',
                'question' =>                   'Tipe data yang digunakan untuk menyimpan angka tanpa koma adalah...',
                'option_a' =>                   'Teks',
                'option_b' =>                   'Bilangan bulat',
                'option_c' =>                   'Logika',
                'correct_option' =>             'b'
            ],
            [
                'id' => '15',
                'course_id' => '1',
                'module_number' => '2',
                'question' =>                   'Tipe data logika hanya memiliki dua nilai, yaitu...',
                'option_a' =>                   'Ya dan Tidak',
                'option_b' =>                   'Benar dan Salah',
                'option_c' =>                   'Satu dan Dua',
                'correct_option' =>             'b'
            ],
            [
                'id' => '16',
                'course_id' => '1',
                'module_number' => '2',
                'question' =>                   'Manakah nama variabel yang valid?',
                'option_a' =>                   'jumlah_total',
                'option_b' =>                   '123angka',
                'option_c' =>                   'nama siswa',
                'correct_option' =>             'a'
            ],
            [
                'id' => '17',
                'course_id' => '1',
                'module_number' => '2',
                'question' =>                   'Mengapa tipe data penting dalam pemrograman?',
                'option_a' =>                   'Untuk menghias program',
                'option_b' =>                   'Untuk mengetahui ukuran font',
                'option_c' =>                   'Untuk menentukan jenis data yang disimpan',
                'correct_option' =>             'c'
            ],
            [
                'id' => '18',
                'course_id' => '1',
                'module_number' => '2',
                'question' =>                   'Apa yang terjadi jika variabel digunakan tanpa isi (nilai)?',
                'option_a' =>                   'Program tetap berjalan seperti biasa',
                'option_b' =>                   'Program bisa mengalami kesalahan',
                'option_c' =>                   'Variabel langsung diisi nol',
                'correct_option' =>             'b'
            ],
            [
                'id' => '19',
                'course_id' => '1',
                'module_number' => '2',
                'question' =>                   'Tipe data yang digunakan untuk menyimpan angka pecahan (ada koma) adalah...',
                'option_a' =>                   'Bilangan bulat',
                'option_b' =>                   'Pecahan/desimal',
                'option_c' =>                   'Logika',
                'correct_option' =>             'b'
            ],
            [
                'id' => '20',
                'course_id' => '1',
                'module_number' => '2',
                'question' =>                   'Apa yang terjadi jika dua variabel memiliki nama yang sama dalam satu bagian program?',
                'option_a' =>                   'Program akan memilih yang lebih panjang',
                'option_b' =>                   'Program bisa menjadi bingung atau error',
                'option_c' =>                   'Program secara otomatis menamai ulang',
                'correct_option' =>             'b'
            ],

            [
                'id' => '21',
                'course_id' => '1',
                'module_number' => '3',
                'question' =>                       'Apa tujuan dari struktur percabangan dalam program?',
                'option_a' =>                       'Mengulang baris kode berkali-kali<br>',
                'option_b' =>                       'Menyimpan nilai dalam variabel<br>',
                'option_c' =>                       'Menjalankan perintah berdasarkan kondisi tertentu',
                'correct_option' =>                 'c'
            ],
            [
                'id' => '22',
                'course_id' => '1',
                'module_number' => '3',
                'question' =>                       'Struktur "jika - maka" termasuk dalam kategori...',
                'option_a' =>                       'Perulangan<br>',
                'option_b' =>                       'Percabangan<br>',
                'option_c' =>                       'Fungsi',
                'correct_option' =>                 'b'
            ],
            [
                'id' => '23',
                'course_id' => '1',
                'module_number' => '3',
                'question' =>                       'Dalam percabangan, jika kondisi bernilai salah (false), maka...',
                'option_a' =>                       'Semua perintah akan tetap dijalankan<br>',
                'option_b' =>                       'Program akan berhenti<br>',
                'option_c' =>                       'Perintah dalam blok tersebut tidak dijalankan',
                'correct_option' =>                 'c'
            ],
            [
                'id' => '24',
                'course_id' => '1',
                'module_number' => '3',
                'question' =>                       'Struktur perulangan digunakan untuk...',
                'option_a' =>                       'Menyimpan data<br>',
                'option_b' =>                       'Mengevaluasi ekspresi logika<br>',
                'option_c' =>                       'Menjalankan kode berulang kali',
                'correct_option' =>                 'c'
            ],
            [
                'id' => '25',
                'course_id' => '1',
                'module_number' => '3',
                'question' =>                       'Perulangan yang terus berjalan tanpa henti disebut...',
                'option_a' =>                       'Perulangan logika<br>',
                'option_b' =>                       'Perulangan normal<br>',
                'option_c' =>                       'Perulangan tak hingga',
                'correct_option' =>                 'c'
            ],
            [
                'id' => '26',
                'course_id' => '1',
                'module_number' => '3',
                'question' =>                       'Apa yang harus dimiliki oleh perulangan agar bisa berhenti?',
                'option_a' =>                       'Fungsi cetak<br>',
                'option_b' =>                       'Syarat berhenti (kondisi)<br>',
                'option_c' =>                       'Variabel teks',
                'correct_option' =>                 'b'
            ],
            [
                'id' => '27',
                'course_id' => '1',
                'module_number' => '3',
                'question' =>                       'Manakah contoh situasi yang cocok menggunakan perulangan?',
                'option_a' =>                       'Menampilkan "Selamat datang" 100 kali<br>',
                'option_b' =>                       'Memilih satu dari dua pilihan<br>',
                'option_c' =>                       'Menyimpan data nama pengguna',
                'correct_option' =>                 'a'
            ],
            [
                'id' => '28',
                'course_id' => '1',
                'module_number' => '3',
                'question' =>                       'Struktur kontrol mana yang cocok untuk memilih satu dari banyak pilihan?',
                'option_a' =>                       'Perulangan tak terbatas<br>',
                'option_b' =>                       'Percabangan bertingkat<br>',
                'option_c' =>                       'Fungsi perhitungan',
                'correct_option' =>                 'b'
            ],
            [
                'id' => '29',
                'course_id' => '1',
                'module_number' => '3',
                'question' =>                       'Mengapa penting menggunakan perulangan dibanding menulis kode berulang?',
                'option_a' =>                       'Karena lebih rumit<br>',
                'option_b' =>                       'Karena mempercepat pengetikan<br>',
                'option_c' =>                       'Karena membuat kode lebih efisien dan rapi',
                'correct_option' =>                 'c'
            ],
            [
                'id' => '30',
                'course_id' => '1',
                'module_number' => '3',
                'question' =>                       'Apa akibat jika syarat berhenti pada perulangan tidak pernah terpenuhi?',
                'option_a' =>                       'Program akan selesai lebih cepat<br>',
                'option_b' =>                       'Program akan berhenti otomatis<br>',
                'option_c' =>                       'Program bisa macet atau tidak berhenti',
                'correct_option' =>                 'c'
            ],
            [
                'id' => '31',
                'course_id' => '2',
                'module_number' => '1',
                'question' =>                       'Apa kepanjangan dari HTML?',
                'option_a' =>                       'Hyperlink and Text Markup Language',
                'option_b' =>                       'Hyper Text Markup Language',
                'option_c' =>                       'Home Tool Markup Language',
                'correct_option' =>                 'b'
            ],
            [
                'id' => '32',
                'course_id' => '2',
                'module_number' => '1',
                'question' =>                       'Elemen manakah yang digunakan untuk membuat judul (heading) terbesar di HTML?',
                'option_a' =>                       '<h6>',
                'option_b' =>                       '<heading>',
                'option_c' =>                       '<h1>',
                'correct_option' =>                 'c'
            ],
            [
                'id' => '33',
                'course_id' => '2',
                'module_number' => '1',
                'question' =>                       'Tag HTML manakah yang digunakan untuk membuat tautan (link)?',
                'option_a' =>                       '<a>',
                'option_b' =>                       '<link>',
                'option_c' =>                       '<href>',
                'correct_option' =>     'a'
            ],
            [
                'id' => '34',
                'course_id' => '2',
                'module_number' => '1',
                'question' =>                       'Tag HTML untuk membuat paragraf adalah...',
                'option_a' =>                       '<p>',
                'option_b' =>                       '<para>',
                'option_c' =>                       '<text>',
                'correct_option' =>                 'a'
            ],
            [
                'id' => '35',
                'course_id' => '2',
                'module_number' => '1',
                'question' =>                       'Tag HTML manakah yang digunakan untuk menyisipkan gambar?',
                'option_a' =>                       '<image>',
                'option_b' =>                       '<img>',
                'option_c' =>                       '<pic>',
                'correct_option' =>                 'b'
            ],
            [
                'id' => '36',
                'course_id' => '2',
                'module_number' => '1',
                'question' =>                       'Atribut HTML apa yang digunakan untuk menentukan sumber gambar?',
                'option_a' =>                       'href',
                'option_b' =>                       'src',
                'option_c' =>                       'link',
                'correct_option' =>                 'b'
            ],
            [
                'id' => '37',
                'course_id' => '2',
                'module_number' => '1',
                'question' =>                       'Tag manakah yang digunakan untuk membuat daftar bernomor?',
                'option_a' =>                       '<ul>',
                'option_b' =>                       '<ol>',
                'option_c' =>                       '<list>',
                'correct_option' =>                 'b'
            ],
            [
                'id' => '38',
                'course_id' => '2',
                'module_number' => '1',
                'question' =>                       'Tag <br> dalam HTML digunakan untuk...',
                'option_a' =>                       'Membuat teks menjadi tebal',
                'option_b' =>                       'Menambahkan baris baru',
                'option_c' =>                       'Membuat teks menjadi miring',
                'correct_option' =>                 'b'
            ],
            [
                'id' => '39',
                'course_id' => '2',
                'module_number' => '1',
                'question' =>                       'Manakah yang merupakan atribut HTML yang benar untuk membuat tautan terbuka di tab baru?',
                'option_a' =>                       'new-tab="true"',
                'option_b' =>                       'target="_blank"',
                'option_c' =>                       'open="new"',
                'correct_option' =>                 'b'
            ],
            [
                'id' => '40',
                'course_id' => '2',
                'module_number' => '1',
                'question' =>                       'Di manakah tag <title> biasanya ditempatkan?',
                'option_a' =>                       'Di dalam <body>',
                'option_b' =>                       'Di bawah <h1>',
                'option_c' =>                       'Di dalam <head>',
                'correct_option' =>                 'c'
            ],

            [
                'id' => '41',
                'course_id' => '2',
                'module_number' => '2',
                'question' =>                   'Apa kepanjangan dari CSS?',
                'option_a' =>                   'Computer Style Sheets',
                'option_b' =>                   'Creative Style Sheets',
                'option_c' =>                   'Cascading Style Sheets',
                'correct_option' =>             'c'
            ],
            [
                'id' => '42',
                'course_id' => '2',
                'module_number' => '2',
                'question' =>                   'Bagaimana cara menambahkan CSS eksternal ke HTML?',
                'option_a' =>                   'rel="stylesheet" href="style.css">',
                'option_b' =>                   'src="style.css">',
                'option_c' =>                   'href="style.css">',
                'correct_option' =>             'a'
            ],
            [
                'id' => '43',
                'course_id' => '2',
                'module_number' => '2',
                'question' =>                   'Selector CSS mana yang digunakan untuk memilih elemen berdasarkan ID?',
                'option_a' =>                   '.id',
                'option_b' =>                   '#id',
                'option_c' =>                   'id()',
                'correct_option' =>             'b'
            ],
            [
                'id' => '44',
                'course_id' => '2',
                'module_number' => '2',
                'question' =>                   'Bagaimana Anda memberi warna latar belakang pada elemen HTML?',
                'option_a' =>                   'color-background',
                'option_b' =>                   'background-color',
                'option_c' =>                   'bg-color',
                'correct_option' =>             'b'
            ],
            [
                'id' => '45',
                'course_id' => '2',
                'module_number' => '2',
                'question' =>                   'Apa nilai default dari posisi elemen HTML?',
                'option_a' =>                   'relative',
                'option_b' =>                   'absolute',
                'option_c' =>                   'static',
                'correct_option' =>             'c'
            ],
            [
                'id' => '46',
                'course_id' => '2',
                'module_number' => '2',
                'question' =>                   'Bagaimana cara membuat teks menjadi tebal di CSS?',
                'option_a' =>                   'font-weight: bold;',
                'option_b' =>                   'font-bold: true;',
                'option_c' =>                   'text-style: bold;',
                'correct_option' =>             'a'
            ],
            [
                'id' => '47',
                'course_id' => '2',
                'module_number' => '2',
                'question' =>                   'Apa fungsi dari properti <code>z-index</code>?',
                'option_a' =>                   'Menentukan warna elemen',
                'option_b' =>                   'Mengatur urutan tumpukan elemen',
                'option_c' =>                   'Mengatur ukuran font',
                'correct_option' =>             'b'
            ],
            [
                'id' => '48',
                'course_id' => '2',
                'module_number' => '2',
                'question' =>                   'Bagaimana cara memilih semua elemen <code>&lt;p&gt;</code> dalam CSS?',
                'option_a' =>                   'p { }',
                'option_b' =>                   '.p { }',
                'option_c' =>                   '#p { }',
                'correct_option' =>             'a'
            ],
            [
                'id' => '49',
                'course_id' => '2',
                'module_number' => '2',
                'question' =>                   'Properti CSS mana yang digunakan untuk mengubah ukuran teks?',
                'option_a' =>                   'text-size',
                'option_b' =>                   'font-size',
                'option_c' =>                   'size',
                'correct_option' =>             'b'
            ],
            [
                'id' => '50',
                'course_id' => '2',
                'module_number' => '2',
                'question' =>                   'Bagaimana Anda membuat elemen berada di tengah secara horizontal?',
                'option_a' =>                   'margin: center;',
                'option_b' =>                   'text-align: center;',
                'option_c' =>                   'margin: 0 auto;',
                'correct_option' =>             'c'
            ],

            [
                'id' => '51',
                'course_id' => '2',
                'module_number' => '3',
                'question' =>                   'Apa tipe data dari nilai <code>true</code> dalam JavaScript?',
                'option_a' =>                   'String',
                'option_b' =>                   'Boolean',
                'option_c' =>                   'Number',
                'correct_option' =>             'b'
            ],
            [
                'id' => '52',
                'course_id' => '2',
                'module_number' => '3',
                'question' =>                   'Bagaimana cara mendeklarasikan variabel di JavaScript yang nilainya bisa diubah?',
                'option_a' =>                   'const nama;',
                'option_b' =>                   'let nama;',
                'option_c' =>                   'fixed nama;',
                'correct_option' =>             'b'
            ],
            [
                'id' => '53',
                'course_id' => '2',
                'module_number' => '3',
                'question' =>                   'Fungsi mana yang digunakan untuk menampilkan pesan di kotak alert?',
                'option_a' =>                   'alertBox()',
                'option_b' =>                   'alert()',
                'option_c' =>                   'prompt()',
                'correct_option' =>             'b'
            ],
            [
                'id' => '54',
                'course_id' => '2',
                'module_number' => '3',
                'question' =>                   'Apa hasil dari <code>typeof 42</code>?',
                'option_a' =>                   '"number"',
                'option_b' =>                   '"string"',
                'option_c' =>                   '"object"',
                'correct_option' =>             'a'
            ],
            [
                'id' => '55',
                'course_id' => '2',
                'module_number' => '3',
                'question' =>                   'Bagaimana membuat fungsi di JavaScript?',
                'option_a' =>                   'function myFunc() { }',
                'option_b' =>                   'func myFunc() { }',
                'option_c' =>                   'def myFunc() { }',
                'correct_option' =>             'a'
            ],
            [
                'id' => '56',
                'course_id' => '2',
                'module_number' => '3',
                'question' =>                   'Bagaimana menulis komentar satu baris di JavaScript?',
                'option_a' =>                   '<!-- komentar -->',
                'option_b' =>                   '// komentar',
                'option_c' =>                   '# komentar',
                'correct_option' =>             'b'
            ],
            [
                'id' => '57',
                'course_id' => '2',
                'module_number' => '3',
                'question' =>                   'Apa hasil dari <code>5 + "5"</code> di JavaScript?',
                'option_a' =>                   '10',
                'option_b' =>                   '"55"',
                'option_c' =>                   'Error',
                'correct_option' =>             'b'
            ],
            [
                'id' => '58',
                'course_id' => '2',
                'module_number' => '3',
                'question' =>                   'Bagaimana cara menambahkan elemen ke akhir array <code>arr</code>?',
                'option_a' =>                   'arr.push(element)',
                'option_b' =>                   'arr.add(element)',
                'option_c' =>                   'arr.insert(element)',
                'correct_option' =>             'a'
            ],
            [
                'id' => '59',
                'course_id' => '2',
                'module_number' => '3',
                'question' =>                   'Mana operator perbandingan yang membandingkan nilai tanpa tipe data?',
                'option_a' =>                   '===',
                'option_b' =>                   '==',
                'option_c' =>                   '!=',
                'correct_option' =>             'b'
            ],
            [
                'id' => '60',
                'course_id' => '2',
                'module_number' => '3',
                'question' =>                   ' Apa output dari <code>console.log(typeof null)</code>?',
                'option_a' =>                   '"null"',
                'option_b' =>                   '"object"',
                'option_c' =>                   '"undefined"',
                'correct_option' =>             'b'
            ],

            [
                'id' => '61',
                'course_id' => '3',
                'module_number' => '1',
                'question' =>                   'Struktur data apa yang menyimpan elemen secara berurutan dan dapat diakses dengan indeks?',
                'option_a' =>                   'Linked List',
                'option_b' =>                   'Array',
                'option_c' =>                   'Stack',
                'correct_option' =>             'b'
            ],
            [
                'id' => '62',
                'course_id' => '3',
                'module_number' => '1',
                'question' =>                   'Struktur data yang bekerja dengan prinsip LIFO disebut?',
                'option_a' =>                   'Queue',
                'option_b' =>                   'Stack',
                'option_c' =>                   'Tree',
                'correct_option' =>             'b'
            ],
            [
                'id' => '63',
                'course_id' => '3',
                'module_number' => '1',
                'question' =>                   'Struktur data yang menggunakan node yang saling terhubung satu sama lain disebut?',
                'option_a' =>                   'Linked List',
                'option_b' =>                   'Array',
                'option_c' =>                   'Hash Table',
                'correct_option' =>             'a'
            ],
            [
                'id' => '64',
                'course_id' => '3',
                'module_number' => '1',
                'question' =>                   'Apa fungsi utama dari queue dalam struktur data?',
                'option_a' =>                   'Menyimpan data secara LIFO',
                'option_b' =>                   'Menyimpan data secara FIFO',
                'option_c' =>                   'Menghubungkan data secara hirarkis',
                'correct_option' =>             'b'
            ],
            [
                'id' => '65',
                'course_id' => '3',
                'module_number' => '1',
                'question' =>                   'Struktur data yang biasa digunakan untuk menyimpan data pasangan kunci dan nilai disebut?',
                'option_a' =>                   'Stack',
                'option_b' =>                   'Hash Table',
                'option_c' =>                   'Linked List',
                'correct_option' =>             'b'
            ],
            [
                'id' => '66',
                'course_id' => '3',
                'module_number' => '1',
                'question' =>                   'Apa nama struktur data yang berbentuk pohon dengan setiap node memiliki maksimal dua anak?',
                'option_a' =>                   'Binary Tree',
                'option_b' =>                   'Graph',
                'option_c' =>                   'Queue',
                'correct_option' =>             'a'
            ],
            [
                'id' => '67',
                'course_id' => '3',
                'module_number' => '1',
                'question' =>                   'Dalam struktur data, apa itu node?',
                'option_a' =>                   'Elemen dasar yang menyimpan data dan referensi',
                'option_b' =>                   'Metode pengurutan',
                'option_c' =>                   'Tipe data primitif',
                'correct_option' =>             'a'
            ],
            [
                'id' => '68',
                'course_id' => '3',
                'module_number' => '1',
                'question' =>                   'Manakah dari berikut ini bukan struktur data linear?',
                'option_a' =>                   'Array',
                'option_b' =>                   'Graph',
                'option_c' =>                   'Linked List',
                'correct_option' =>             'b'
            ],
            [
                'id' => '69',
                'course_id' => '3',
                'module_number' => '1',
                'question' =>                   'Apa operasi dasar pada stack?',
                'option_a' =>                   'Push dan Pop',
                'option_b' =>                   'Insert dan Delete',
                'option_c' =>                   'Enqueue dan Dequeue',
                'correct_option' =>             'a'
            ],
            [
                'id' => '70',
                'course_id' => '3',
                'module_number' => '1',
                'question' =>                   'Struktur data manakah yang memungkinkan traversal dari satu node ke banyak node lain secara tidak berurutan?',
                'option_a' =>                   'Graph',
                'option_b' =>                   'Array',
                'option_c' =>                   'Stack',
                'correct_option' =>             'a'
            ],

            [
                'id' => '71',
                'course_id' => '3',
                'module_number' => '2',
                'question' =>                   'Algoritma pencarian yang membandingkan secara berurutan dari elemen pertama sampai ditemukan adalah?',
                'option_a' =>                   'Binary Search',
                'option_b' =>                   'Linear Search',
                'option_c' =>                   'Hash Search',
                'correct_option' =>             'b'
            ],
            [
                'id' => '72',
                'course_id' => '3',
                'module_number' => '2',
                'question' =>                   'Algoritma pengurutan yang membandingkan elemen berdekatan dan menukarnya jika urutan salah disebut?',
                'option_a' =>                   'Bubble Sort',
                'option_b' =>                   'Quick Sort',
                'option_c' =>                   'Merge Sort',
                'correct_option' =>             'a'
            ],
            [
                'id' => '73',
                'course_id' => '3',
                'module_number' => '2',
                'question' =>                   'Algoritma pencarian yang hanya dapat digunakan pada data yang sudah terurut adalah?',
                'option_a' =>                   'Linear Search',
                'option_b' =>                   'Binary Search',
                'option_c' =>                   'Hash Search',
                'correct_option' =>             'b'
            ],
            [
                'id' => '74',
                'course_id' => '3',
                'module_number' => '2',
                'question' =>                   'Algoritma pengurutan yang menggunakan prinsip divide and conquer adalah?',
                'option_a' =>                   'Bubble Sort',
                'option_b' =>                   'Merge Sort',
                'option_c' =>                   'Insertion Sort',
                'correct_option' =>             'b'
            ],
            [
                'id' => '75',
                'course_id' => '3',
                'module_number' => '2',
                'question' =>                   'Dalam Binary Search, data harus dalam keadaan?',
                'option_a' =>                   'Terurut',
                'option_b' =>                   'Acak',
                'option_c' =>                   'Berpasangan',
                'correct_option' =>             'a'
            ],
            [
                'id' => '76',
                'course_id' => '3',
                'module_number' => '2',
                'question' =>                   'Algoritma pengurutan mana yang memiliki kompleksitas waktu terbaik rata-rata di antara yang berikut?',
                'option_a' =>                   'Bubble Sort',
                'option_b' =>                   'Quick Sort',
                'option_c' =>                   'Selection Sort',
                'correct_option' =>             'b'
            ],
            [
                'id' => '77',
                'course_id' => '3',
                'module_number' => '2',
                'question' =>                   'Apa karakteristik utama dari Linear Search?',
                'option_a' =>                   'Memerlukan data terurut',
                'option_b' =>                   'Memeriksa setiap elemen satu per satu',
                'option_c' =>                   'Menggunakan hashing',
                'correct_option' =>             'b'
            ],
            [
                'id' => '78',
                'course_id' => '3',
                'module_number' => '2',
                'question' =>                   'Algoritma pengurutan mana yang memindahkan elemen terkecil ke posisi awal secara bertahap?',
                'option_a' =>                   'Selection Sort',
                'option_b' =>                   'Bubble Sort',
                'option_c' =>                   'Merge Sort',
                'correct_option' =>             'a'
            ],
            [
                'id' => '79',
                'course_id' => '3',
                'module_number' => '2',
                'question' =>                   'Algoritma pengurutan apa yang menggunakan teknik pembagian data menjadi sublist kemudian digabungkan?',
                'option_a' =>                   'Quick Sort',
                'option_b' =>                   'Merge Sort',
                'option_c' =>                   'Bubble Sort',
                'correct_option' =>             'b'
            ],
            [
                'id' => '80',
                'course_id' => '3',
                'module_number' => '2',
                'question' =>                   'Dalam konteks algoritma, apa arti istilah "divide and conquer"?',
                'option_a' =>                   'Membagi masalah menjadi bagian lebih kecil lalu selesaikan secara terpisah',
                'option_b' =>                   'Mencari elemen secara linear',
                'option_c' =>                   'Menggabungkan data secara acak',
                'correct_option' =>             'a'
            ],

            [
                'id' => '81',
                'course_id' => '3',
                'module_number' => '3',
                'question' =>                   'Notasi Big O digunakan untuk mengukur apa dalam algoritma?',
                'option_a' =>                   'Kualitas kode',
                'option_b' =>                   'Kompleksitas waktu atau ruang',
                'option_c' =>                   'Ukuran data',
                'correct_option' =>             'b'
            ],
            [
                'id' => '82',
                'course_id' => '3',
                'module_number' => '3',
                'question' =>                   'Kompleksitas waktu terbaik (best case) untuk Binary Search adalah?',
                'option_a' =>                   'O(n)',
                'option_b' =>                   'O(log n)',
                'option_c' =>                   'O(1)',
                'correct_option' =>             'c'
            ],
            [
                'id' => '83',
                'course_id' => '3',
                'module_number' => '3',
                'question' =>                   'Kompleksitas waktu terburuk (worst case) untuk Bubble Sort adalah?',
                'option_a' =>                   'O(n)',
                'option_b' =>                   'O(n log n)',
                'option_c' =>                   'O(n²)',
                'correct_option' =>             'c'
            ],
            [
                'id' => '84',
                'course_id' => '3',
                'module_number' => '3',
                'question' =>                   'Notasi Big Omega (Ω) menunjukkan apa?',
                'option_a' =>                   'Batas atas kompleksitas',
                'option_b' =>                   'Batas bawah kompleksitas',
                'option_c' =>                   'Kompleksitas rata-rata',
                'correct_option' =>             'b'
            ],
            [
                'id' => '85',
                'course_id' => '3',
                'module_number' => '3',
                'question' =>                   'Jika algoritma memiliki kompleksitas O(1), artinya?',
                'option_a' =>                   'Waktu eksekusi konstan tidak tergantung input',
                'option_b' =>                   'Waktu eksekusi linear',
                'option_c' =>                   'Waktu eksekusi eksponensial',
                'correct_option' =>             'a'
            ],
            [
                'id' => '86',
                'course_id' => '3',
                'module_number' => '3',
                'question' =>                   'Kompleksitas waktu rata-rata (average case) seringkali digunakan untuk?',
                'option_a' =>                   'Memprediksi performa algoritma dalam skenario umum',
                'option_b' =>                   'Menghitung waktu terburuk',
                'option_c' =>                   'Menghitung waktu terbaik',
                'correct_option' =>             'a'
            ],
            [
                'id' => '87',
                'course_id' => '3',
                'module_number' => '3',
                'question' =>                   'Kompleksitas waktu O(n log n) biasanya diasosiasikan dengan algoritma apa?',
                'option_a' =>                   'Bubble Sort',
                'option_b' =>                   'Merge Sort',
                'option_c' =>                   'Linear Search',
                'correct_option' =>             'b'
            ],
            [
                'id' => '88',
                'course_id' => '3',
                'module_number' => '3',
                'question' =>                   'Algoritma dengan kompleksitas O(n²) biasanya akan menjadi tidak efisien untuk?',
                'option_a' =>                   'Data kecil',
                'option_b' =>                   'Data sangat besar',
                'option_c' =>                   'Data terurut',
                'correct_option' =>             'b'
            ],
            [
                'id' => '89',
                'course_id' => '3',
                'module_number' => '3',
                'question' =>                   'Kompleksitas waktu O(log n) biasanya menunjukkan algoritma yang?',
                'option_a' =>                   'Memproses data secara linear',
                'option_b' =>                   'Mempersempit pencarian secara bertahap',
                'option_c' =>                   'Memproses data secara eksponensial',
                'correct_option' =>             'b'
            ],
            [
                'id' => '90',
                'course_id' => '3',
                'module_number' => '3',
                'question' =>                   'Dalam analisis algoritma, istilah "worst case" berarti?',
                'option_a' =>                   'Kondisi input terbaik',
                'option_b' =>                   'Kondisi input terburuk yang menyebabkan waktu eksekusi maksimal',
                'option_c' =>                   'Kondisi rata-rata',
                'correct_option' =>             'b'
            ],



            [
                'id' => '91',
                'course_id' => '4',
                'module_number' => '1',
                'question' =>                   'Apa itu database?',
                'option_a' =>                   'Sistem pengolah gambar',
                'option_b' =>                   'Kumpulan data yang terorganisir',
                'option_c' =>                   'Software pengolah video',
                'correct_option' =>             'b'
            ],
            [
                'id' => '92',
                'course_id' => '4',
                'module_number' => '1',
                'question' =>                   'Apa fungsi utama dari DBMS?',
                'option_a' =>                   'Menyimpan dan mengelola data',
                'option_b' =>                   'Membuat desain grafis',
                'option_c' =>                   'Mengedit video',
                'correct_option' =>             'a'
            ],
            [
                'id' => '93',
                'course_id' => '4',
                'module_number' => '1',
                'question' =>                   'Apa itu primary key dalam database?',
                'option_a' =>                   'Kolom yang bisa berisi data duplikat',
                'option_b' =>                   'Kolom unik yang menjadi identitas tiap baris',
                'option_c' =>                   'Kolom berisi data yang dihapus',
                'correct_option' =>             'b'
            ],
            [
                'id' => '94',
                'course_id' => '4',
                'module_number' => '1',
                'question' =>                   'Apa itu foreign key?',
                'option_a' =>                   'Kolom yang merujuk ke primary key tabel lain',
                'option_b' =>                   'Kolom yang menyimpan angka saja',
                'option_c' =>                   'Kolom yang tidak boleh berisi nilai NULL',
                'correct_option' =>             'a'
            ],
            [
                'id' => '95',
                'course_id' => '4',
                'module_number' => '1',
                'question' =>                   'Apa kepanjangan dari SQL?',
                'option_a' =>                   'Structured Query Language',
                'option_b' =>                   'Simple Query Language',
                'option_c' =>                   'Sequential Query List',
                'correct_option' =>             'a'
            ],
            [
                'id' => '96',
                'course_id' => '4',
                'module_number' => '1',
                'question' =>                   'Apa itu relasi dalam konteks database relasional?',
                'option_a' =>                   'Hubungan antar tabel',
                'option_b' =>                   'Jenis file database',
                'option_c' =>                   'Tabel yang kosong',
                'correct_option' =>             'a'
            ],
            [
                'id' => '97',
                'course_id' => '4',
                'module_number' => '1',
                'question' =>                   'Apa tujuan normalisasi database?',
                'option_a' =>                   'Mengurangi redundansi data',
                'option_b' =>                   'Memperbesar ukuran database',
                'option_c' =>                   'Membuat database tidak terstruktur',
                'correct_option' =>             'a'
            ],
            [
                'id' => '98',
                'course_id' => '4',
                'module_number' => '1',
                'question' =>                   'Apa yang dimaksud dengan query?',
                'option_a' =>                   'Perintah untuk mengambil atau manipulasi data',
                'option_b' =>                   'File backup database',
                'option_c' =>                   'Software untuk desain database',
                'correct_option' =>             'a'
            ],
            [
                'id' => '99',
                'course_id' => '4',
                'module_number' => '1',
                'question' =>                   'Apa itu atribut dalam tabel database?',
                'option_a' =>                   'Baris data',
                'option_b' =>                   'Kolom atau field',
                'option_c' =>                   'Kunci primer',
                'correct_option' =>             'b'
            ],
            [
                'id' => '100',
                'course_id' => '4',
                'module_number' => '1',
                'question' =>                   'Apa yang dimaksud dengan schema database?',
                'option_a' =>                   'Struktur keseluruhan database',
                'option_b' =>                   'Data yang tersimpan dalam tabel',
                'option_c' =>                   'Software untuk mengakses data',
                'correct_option' =>             'a'
            ],



            [
                'id' => '101',
                'course_id' => '4',
                'module_number' => '2',
                'question' =>                   'Perintah SQL untuk mengambil data dari tabel adalah?',
                'option_a' =>                   'INSERT',
                'option_b' =>                   'SELECT',
                'option_c' =>                   'UPDATE',
                'correct_option' =>             'b'
            ],
            [
                'id' => '102',
                'course_id' => '4',
                'module_number' => '2',
                'question' =>                   'Perintah SQL untuk menambah data ke tabel?',
                'option_a' =>                   'DELETE',
                'option_b' =>                   'INSERT INTO',
                'option_c' =>                   'CREATE',
                'correct_option' =>             'b'
            ],
            [
                'id' => '103',
                'course_id' => '4',
                'module_number' => '2',
                'question' =>                   'Bagaimana cara menghapus seluruh data dalam tabel tapi tidak menghapus tabel itu sendiri?',
                'option_a' =>                   'DROP TABLE',
                'option_b' =>                   'DELETE FROM',
                'option_c' =>                   'TRUNCATE TABLE',
                'correct_option' =>             'c'
            ],
            [
                'id' => '104',
                'course_id' => '4',
                'module_number' => '2',
                'question' =>                   'Perintah SQL untuk mengubah data yang sudah ada?',
                'option_a' =>                   'UPDATE',
                'option_b' =>                   'INSERT',
                'option_c' =>                   'ALTER',
                'correct_option' =>             'a'
            ],
            [
                'id' => '105',
                'course_id' => '4',
                'module_number' => '2',
                'question' =>                   'Bagian mana dari perintah SELECT yang digunakan untuk menyaring data?',
                'option_a' =>                   'WHERE',
                'option_b' =>                   'FROM',
                'option_c' =>                   'ORDER BY',
                'correct_option' =>             'a'
            ],
            [
                'id' => '106',
                'course_id' => '4',
                'module_number' => '2',
                'question' =>                   'Apa fungsi dari perintah CREATE TABLE?',
                'option_a' =>                   'Membuat tabel baru di database',
                'option_b' =>                   'Menghapus tabel',
                'option_c' =>                   'Menambahkan data ke tabel',
                'correct_option' =>             'a'
            ],
            [
                'id' => '107',
                'course_id' => '4',
                'module_number' => '2',
                'question' =>                   'Apa arti dari perintah SQL JOIN?',
                'option_a' =>                   'Menggabungkan baris dari dua atau lebih tabel berdasarkan kolom terkait',
                'option_b' =>                   'Menghapus data duplikat',
                'option_c' =>                   'Memilih data secara acak',
                'correct_option' =>             'a'
            ],
            [
                'id' => '108',
                'course_id' => '4',
                'module_number' => '2',
                'question' =>                   'Perintah SQL untuk mengurutkan hasil query?',
                'option_a' =>                   'ORDER BY',
                'option_b' =>                   'GROUP BY',
                'option_c' =>                   'HAVING',
                'correct_option' =>             'a'
            ],
            [
                'id' => '109',
                'course_id' => '4',
                'module_number' => '2',
                'question' =>                   'Bagian mana dari SQL yang digunakan untuk mengelompokkan data?',
                'option_a' =>                   'GROUP BY',
                'option_b' =>                   'WHERE',
                'option_c' =>                   'ORDER BY',
                'correct_option' =>             'a'
            ],
            [
                'id' => '110',
                'course_id' => '4',
                'module_number' => '2',
                'question' =>                   'Fungsi dari perintah DELETE dalam SQL adalah?',
                'option_a' =>                   'Menghapus tabel',
                'option_b' =>                   'Menghapus baris data tertentu',
                'option_c' =>                   'Menambahkan data baru',
                'correct_option' =>             'b'
            ],

            [
                'id' => '111',
                'course_id' => '4',
                'module_number' => '3',
                'question' =>                   'Bagaimana cara mengambil data dari dua tabel yang memiliki hubungan berdasarkan kolom yang sama?',
                'option_a' =>                   'UNION',
                'option_b' =>                   'JOIN',
                'option_c' =>                   'WHERE',
                'correct_option' =>             'b'
            ],
            [
                'id' => '112',
                'course_id' => '4',
                'module_number' => '3',
                'question' =>                   'Manakah jenis JOIN yang mengembalikan semua baris dari tabel kiri dan baris yang cocok dari tabel kanan?',
                'option_a' =>                   'INNER JOIN',
                'option_b' =>                   'LEFT JOIN',
                'option_c' =>                   'RIGHT JOIN',
                'correct_option' =>             'b'
            ],
            [
                'id' => '113',
                'course_id' => '4',
                'module_number' => '3',
                'question' =>                   'Perintah SQL manakah yang digunakan untuk menghapus duplikat hasil query?',
                'option_a' =>                   'DISTINCT',
                'option_b' =>                   'UNIQUE',
                'option_c' =>                   'DELETE DUPLICATE',
                'correct_option' =>             'a'
            ],
            [
                'id' => '114',
                'course_id' => '4',
                'module_number' => '3',
                'question' =>                   'Fungsi agregasi SQL yang digunakan untuk menghitung jumlah baris adalah?',
                'option_a' =>                   'COUNT()',
                'option_b' =>                   'SUM()',
                'option_c' =>                   'AVG()',
                'correct_option' =>             'a'
            ],
            [
                'id' => '115',
                'course_id' => '4',
                'module_number' => '3',
                'question' =>                   "Bagaimana cara menampilkan 5 baris teratas dari tabel 'produk' berdasarkan kolom 'harga' secara menurun?",
                'option_a' =>                   'SELECT * FROM produk ORDER BY harga ASC LIMIT 5;',
                'option_b' =>                   'SELECT * FROM produk ORDER BY harga DESC LIMIT 5;',
                'option_c' =>                   'SELECT TOP 5 * FROM produk ORDER BY harga DESC;',
                'correct_option' =>             'b'
            ],
            [
                'id' => '116',
                'course_id' => '4',
                'module_number' => '3',
                'question' =>                   'Perintah SQL apa yang digunakan untuk menggabungkan hasil dari dua query yang memiliki struktur kolom sama?',
                'option_a' =>                   'JOIN',
                'option_b' =>                   'UNION',
                'option_c' =>                   'MERGE',
                'correct_option' =>             'b'
            ],
            [
                'id' => '117',
                'course_id' => '4',
                'module_number' => '3',
                'question' =>                   'Manakah dari perintah berikut yang digunakan untuk membuat alias pada nama kolom dalam query?',
                'option_a' =>                   'AS',
                'option_b' =>                   'ALIAS',
                'option_c' =>                   'RENAME',
                'correct_option' =>             'a'
            ],
            [
                'id' => '118',
                'course_id' => '4',
                'module_number' => '3',
                'question' =>                   "Bagaimana cara menampilkan data dari tabel 'pelanggan' yang memiliki nilai 'kota' sama dengan 'Jakarta' dan umur lebih dari 25?",
                'option_a' =>                   "SELECT * FROM pelanggan WHERE kota='Jakarta' OR umur>25;",
                'option_b' =>                   "SELECT * FROM pelanggan WHERE kota='Jakarta' AND umur>25;",
                'option_c' =>                   "SELECT * FROM pelanggan HAVING kota='Jakarta' AND umur>25;",
                'correct_option' =>             'b',
            ],
            [
                'id' => '119',
                'course_id' => '4',
                'module_number' => '3',
                'question' =>                   'Fungsi SQL mana yang digunakan untuk mengambil nilai maksimum dari sebuah kolom?',
                'option_a' =>                   'MAX()',
                'option_b' =>                   'MIN()',
                'option_c' =>                   'TOP()',
                'correct_option' =>             'a'
            ],
            [
                'id' => '120',
                'course_id' => '4',
                'module_number' => '3',
                'question' =>                   'Perintah manakah yang digunakan untuk mengelompokkan hasil query berdasarkan satu atau lebih kolom?',
                'option_a' =>                   'GROUP BY',
                'option_b' =>                   'ORDER BY',
                'option_c' =>                   'HAVING',
                'correct_option' =>             'a'
            ],

        ];

        $this->db->table('tbl_quiz_questions')->insertBatch($data);
    }
}
