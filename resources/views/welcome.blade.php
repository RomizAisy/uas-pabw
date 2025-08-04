<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fretboard Romiz Aisy</title>
    <link rel="stylesheet" href="{{ asset('css/content.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fretboard.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>

<body>
    <section class="header_section">
        <div class="container_header">
            <h1>Guitar Fretboard : Visualisasikan Nada <br>dan Tangga Nada</h1>
            <p>Temukan posisi nada dan tangga nada dengan tampilan yang mudah dipahami.</p>
        </div>

    </section>
    <!--Tombol Utama-->
    <section class="container">
        <div id="container_tombol_utama">
            <button class="tombol_toggle" id="main_All">Hide All Notes</button>
            <button class="tombol_utama" id="main_A">A</button>
            <button class="tombol_utama" id="main_ASharp">A#</button>
            <button class="tombol_utama" id="main_B">B</button>
            <button class="tombol_utama" id="main_C">C</button>
            <button class="tombol_utama" id="main_CSharp">C#</button>
            <button class="tombol_utama" id="main_D">D</button>
            <button class="tombol_utama" id="main_DSharp">D#</button>
            <button class="tombol_utama" id="main_E">E</button>
            <button class="tombol_utama" id="main_F">F</button>
            <button class="tombol_utama" id="main_FSharp">F#</button>
            <button class="tombol_utama" id="main_G">G</button>
            <button class="tombol_utama" id="main_GSharp">G#</button>
        </div>
    </section>


    <!--FRETBOARD-->
    <section id="container_fretboard">

        <div id="fretboard_gitar">
            <!--FRET 0-->
            <div class="fret" id="fret_0">
                <button class="note_E noteAll">E</button>
                <button class="note_B noteAll">B</button>
                <button class="note_G noteAll">G</button>
                <button class="note_D noteAll">D</button>
                <button class="note_A noteAll">A</button>
                <button class="note_E noteAll">E</button>
            </div>
            <!--FRET 1-->
            <div class="fret" id="fret_1">
                <button class="note_F noteAll">F</button>
                <button class="note_C noteAll">C</button>
                <button class="note_GSharp noteAll">G#</button>
                <button class="note_DSharp noteAll">D#</button>
                <button class="note_ASharp noteAll">A#</button>
                <button class="note_F noteAll">F</button>
            </div>
            <!--FRET 2-->
            <div class="fret" id="fret_2">
                <button class="note_FSharp noteAll">F#</button>
                <button class="note_CSharp noteAll">C#</button>
                <button class="note_A noteAll">A</button>
                <button class="note_E noteAll">E</button>
                <button class="note_B noteAll">B</button>
                <button class="note_FSharp noteAll">F#</button>
            </div>
            <!--FRET 3-->
            <div class="fret" id="fret_3">
                <button class="note_G noteAll">G</button>
                <button class="note_D noteAll">D</button>
                <button class="note_ASharp noteAll">A#</button>
                <button class="note_F noteAll">F</button>
                <button class="note_C noteAll">C</button>
                <button class="note_G noteAll">G</button>
            </div>
            <!--FRET 4-->
            <div class="fret" id="fret_4">
                <button class="note_GSharp noteAll">G#</button>
                <button class="note_DSharp noteAll">D#</button>
                <button class="note_B noteAll">B</button>
                <button class="note_FSharp noteAll">F#</button>
                <button class="note_CSharp noteAll">C#</button>
                <button class="note_GSharp noteAll">G#</button>
            </div>
            <!--FRET 5-->
            <div class="fret" id="fret_5">
                <button class="note_A noteAll">A</button>
                <button class="note_E noteAll">E</button>
                <button class="note_C noteAll">C</button>
                <button class="note_G noteAll">G</button>
                <button class="note_D noteAll">D</button>
                <button class="note_A noteAll">A</button>
            </div>
            <!--FRET 6-->
            <div class="fret" id="fret_6">
                <button class="note_ASharp noteAll">A#</button>
                <button class="note_F noteAll">F</button>
                <button class="note_CSharp noteAll">C#</button>
                <button class="note_GSharp noteAll">G#</button>
                <button class="note_DSharp noteAll">D#</button>
                <button class="note_ASharp noteAll">A#</button>
            </div>
            <!--FRET 7-->
            <div class="fret" id="fret_7">
                <button class="note_B noteAll">B</button>
                <button class="note_FSharp noteAll">F#</button>
                <button class="note_D noteAll">D</button>
                <button class="note_A noteAll">A</button>
                <button class="note_E noteAll">E</button>
                <button class="note_B noteAll">B</button>
            </div>
            <!--FRET 8-->
            <div class="fret" id="fret_8">
                <button class="note_C noteAll">C</button>
                <button class="note_G noteAll">G</button>
                <button class="note_DSharp noteAll">D#</button>
                <button class="note_ASharp noteAll">A#</button>
                <button class="note_F noteAll">F</button>
                <button class="note_C noteAll">C</button>
            </div>
            <!--FRET 9-->
            <div class="fret" id="fret_9">
                <button class="note_CSharp noteAll">C#</button>
                <button class="note_GSharp noteAll">G#</button>
                <button class="note_E noteAll">E</button>
                <button class="note_B noteAll">B</button>
                <button class="note_FSharp noteAll">F#</button>
                <button class="note_CSharp noteAll">C#</button>
            </div>
            <!--FRET 10-->
            <div class="fret" id="fret_10">
                <button class="note_D noteAll">D</button>
                <button class="note_A noteAll">A</button>
                <button class="note_F noteAll">F</button>
                <button class="note_C noteAll">C</button>
                <button class="note_G noteAll">G</button>
                <button class="note_D noteAll">D</button>
            </div>
            <!--FRET 11-->
            <div class="fret" id="fret_11">
                <button class="note_DSharp noteAll">D#</button>
                <button class="note_ASharp noteAll">A#</button>
                <button class="note_FSharp noteAll">F#</button>
                <button class="note_CSharp noteAll">C#</button>
                <button class="note_GSharp noteAll">G#</button>
                <button class="note_DSharp noteAll">D#</button>
            </div>
            <!--FRET 12-->
            <div class="fret" id="fret_12">
                <button class="note_E noteAll">E</button>
                <button class="note_B noteAll">B</button>
                <button class="note_G noteAll">G</button>
                <button class="note_D noteAll">D</button>
                <button class="note_A noteAll">A</button>
                <button class="note_E noteAll">E</button>
            </div>
        </div>
    </section>
    <!--Tombol Scale-->

    <section class="container">
        <div id="container_tombol_utama">
            <button class="tombol_toggle" id="scale_All">Show All Notes</button>
            <button class="tombol_utama" id="main_A_scale">A</button>
            <button class="tombol_utama" id="main_ASharp_scale">A#</button>
            <button class="tombol_utama" id="main_B_scale">B</button>
            <button class="tombol_utama" id="main_C_scale">C</button>
            <button class="tombol_utama" id="main_CSharp_scale">C#</button>
            <button class="tombol_utama" id="main_D_scale">D</button>
            <button class="tombol_utama" id="main_DSharp_scale">D#</button>
            <button class="tombol_utama" id="main_E_scale">E</button>
            <button class="tombol_utama" id="main_F_scale">F</button>
            <button class="tombol_utama" id="main_FSharp_scale">F#</button>
            <button class="tombol_utama" id="main_G_scale">G</button>
            <button class="tombol_utama" id="main_GSharp_scale">G#</button>
        </div>
        <div class="container_text">
            <div class="output_text" id="scale_text" >
            </div>
            <div class="output_text" id="chord_text">
            </div>
        </div>
    </section>

    <section class="section_penjelasan">
        <div id="penjelasan_scale">
            <h1>🎵 Cara Menentukan Nada dan Tangga Nada Mayor</h1>
            <p>Tangga nada mayor terdiri dari 7 nada yang mengikuti pola interval tertentu:
                1 - 1 - ½ - 1 - 1 - 1 - ½
                (angka tersebut menunjukkan jarak antar nada dalam satuan nada setengah, atau frets pada gitar).
                <br><br>
                Misalnya, jika kamu memilih nada dasar C, maka tangga nada mayor C akan terdiri dari: <br>
                C - D - E - F - G - A - B

                <br><br>
                Langkah-langkah menggunakan alat ini:

                Pilih nada dasar (root note) yang ingin kamu pelajari, seperti C, D, E, dan seterusnya.

                Sistem akan menampilkan semua nada yang termasuk dalam tangga nada mayor berdasarkan nada tersebut.

                Nada-nada tersebut akan ditampilkan secara visual di seluruh papan fret gitar.

                Kamu dapat berpindah antar nada dasar lain untuk melihat pola tangga nada mayor yang berbeda.

                Dengan melihat posisi setiap nada, kamu dapat mempelajari bentuk-bentuk tangga nada, melatih teknik
                bermain, serta memahami struktur musik secara lebih mendalam.
            </p>
        </div>
        <div id="penjelasan_chord">
            <h1>🎶 Cara Menentukan Family Chord Mayor</h1>
            <p>
                Setiap tangga nada mayor memiliki enam akor utama (plus satu akor diminished) yang disebut sebagai
                family chord atau keluarga akor. Akor-akor ini berasal dari nada-nada dalam tangga nada tersebut dan
                terdengar harmonis jika dimainkan bersama. <br><br>

                📌 Pola Jenis Akor:
                Susunan jenis akor dalam sebuah tangga nada mayor selalu mengikuti urutan:<br><br>

                Mayor - minor - minor - Mayor - Mayor - minor - diminished<br><br>

                Urutan ini berlaku untuk semua tangga nada mayor, dimulai dari nada ke-1 (root) hingga nada ke-7.<br><br>

                🎸 Contoh pada Tangga Nada C Mayor:<br><br>
                Tangga nada C mayor memiliki susunan nada:<br>
                C - D - E - F - G - A - B<br><br>

                Dengan pola akor di atas, maka family chord-nya adalah:<br>
                C (mayor), Dm (minor), Em (minor), F (mayor), G (mayor), Am (minor), Bdim (diminished)<br><br>

                💡 Cara Menggunakannya:<br>
                Pilih nada dasar (root note) untuk tangga nada mayor.<br><br>

                Sistem akan membentuk tangga nada mayor dari nada tersebut.

                Family chord otomatis ditentukan berdasarkan urutan dan jenis akor mayor, minor, dan diminished.

                Family chord ini sangat membantu saat:<br><br>

                Membuat progresi akor untuk lagu<br>

                Menyusun melodi yang harmonis<br>

                Memahami hubungan antar nada dan akor</p>
        </div>
    </section>

    <div style="height: 25vh;"></div>

    <footer> 
        <div>
            <p>RomizAisy</p>
        </div>
    </footer>






</body>

<script src="{{ asset('js/note_array.js') }}"></script>

</html>