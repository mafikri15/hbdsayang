<!DOCTYPE html>
<html lang="id">
<meta charset='UTF-8'/><meta content='width=device-width, initial-scale=1, user-scalable=1, minimum-scale=1, maximum-scale=5' name='viewport'/><meta content='IE=edge' http-equiv='X-UA-Compatible'/>
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Shippori+Antique:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.all.min.js"></script>
  <link href="asset/style.css" rel="stylesheet" type="text/css" />
  <script src="https://unpkg.com/typeit@8.7.0/dist/index.umd.js"></script>
  
<head>
<title>Happy Birthday</title>
<link rel="icon" type="image/x-icon" href="https://malasid.github.io/favicon.png">
<meta name="description" content="HTML Bucin Malas.id">

</head>
<body>
  
   <!-- Ganti Audio di sini -->
   <audio src="asset/lagu.mp3" id="linkmp3" class="sembunyi"></audio>
   
   <div id="bodyblur">
     <!-- Wallpaper --><img src="asset/foto1.jpeg" id="wallpaper"/><div id="beneranblur"></div>
   </div>
   
   <div id='Content'>

     <div id="kadoIn">
       <!-- Tombol Surat --><img src="https://feeldreams.github.io/kadoin.png"/>
     </div>
     <p id="ket">Klik Kadonya ya Sayang!!!!</p>

     <div class="kumpulanstiker">
         <!-- Stiker untuk Konten -->
         <img src="https://feeldreams.github.io/bunga.gif" id="fotostiker"/>
         <img src="https://feeldreams.github.io/pusn.gif" id="fotostiker1"/>
         <img src="https://feeldreams.github.io/pandacoklat.gif" id="fotostiker2"/>
         <img src="https://feeldreams.github.io/cilukba.gif" id="fotostiker3"/>
         <img src="https://feeldreams.github.io/pandakuning.gif" id="fotostiker4"/>
         <img src="https://feeldreams.github.io/emawh.gif" id="fotostiker5"/>
         
         <img src="https://feeldreams.github.io/pandacoklat.gif" id="fotostiker6"/>
     </div>
     
     <p id="halo" class="halo"></p>
     
     <div><blockquote id='bq' data-text='㋡'>
       <p id="kalimat">Aku Ada Sesuatu Nih Sayang🤣❤️</p>

       <p id="pesan1">Klik 4 LOVE di Bawah Ya Sayanggg! 😆❤️</p>
       <div id="kolombaru">
         <li id="lv1">🤍</li>
         <li id="lv2">🤍</li>
         <li id="lv3">🤍</li>
         <li id="lv4">🤍</li>
       </div>

       <p id="pesan2">Tunggu...</p>
       <!-- Pesan -->
       <p id="pesan3">Ciee.. Sayangku Ultah Nih 🤣❤️</p>
       <p id="pesan4">Selamat Ulang Tahun Ya </p>
       <p id="pesan5" class="gaya2">Terus Bersama Ya Sayang</p>
       <p id="pesan6" class="gaya2">Semoga Diberi Kesehatan Kelancaran, di hari spesialmu ini kamu dapat menjadi pribadi yang lebih baik yaa Sayang❤️</p>
       <p id="pesan7" class="gaya2">Love You Ya Sayangg!</p>

       <p id="pesan8" class="gaya2">Semangat Terus Ya Sayang</p>
       <p id="pesan9" class="gaya2">Oh iya, disini ada aku ya sayang, maaf ya sayang kalau aku sering buat sampean marah, badmmod, males tapi ingat ya Sayang ME FOR YOU Sayang🥳❤️ Bersama Selalu ya Sayang</p>
       <p id="pesan10" class="gaya2">Sekali Lagi Selamat Ulang Tahun ya Sayanggg!! 🥳</p>

       <!-- Tombol Lanjut -->
       <p id="opsL">Klik untuk Lanjut</p>
     </blockquote></div>

     <!-- Tombol Kirim Pesan -->
     <div id="Tombol"><a id="By">&#128140; Lanjut</a></div>

     <!-- Pesan Tambahan -->
     <p id="katatambahan" class="sembunyi">Untuk Hadiah e Menyusul Ya Sayangkuuuu 😜</p>
     
     <!-- Pesan Ditolak -->
     <div id="pesanditolak">
       <img id="stikerditolak" src="https://feeldreams.github.io/weee.gif"/>
       <p id="kataditolak">Maaf ya Sayang Hadiahnya Menyusul 😜</p>
     </div>

   </div>

<script>
  const body = document.querySelector("body");const swalst = Swal.mixin({timer: 2300, allowOutsideClick: false, showConfirmButton: false, timerProgressBar: true, imageHeight: 90,}); audio = new Audio('' + linkmp3.src); ftganti=0;fungsi=0;fungsiAwal=0;deffotostiker=fotostiker.src;function berjatuhan() {const heart = document.createElement("div"); heart.className = "fas fa-snowflake"; heart.style.left = (Math.random() * 90)+"vw"; heart.style.animationDuration = (Math.random()*3)+2+"s"; body.appendChild(heart);} setInterval(function name(params) {var heartArr = document.querySelectorAll(".fa-snowflake"); if (heartArr.length > 100) {heartArr[0].remove()}},100);Content.style = "opacity:1;margin-top:16vh"; const swals = Swal.mixin({allowOutsideClick: false, cancelButtonColor: '#FF0040', imageHeight: 80,}); 
  
  document.getElementById("kadoIn").onclick = function() {
    if(fungsiAwal==0){
      audio.play();
      fungsiAwal=1;
      kadoIn.style="transition:all .8s ease;transform:scale(10);opacity:0";
      wallpaper.style="transform: scale(1.5);";
      ket.style="display:none";
      setTimeout(initengahan,300);
      setTimeout(function() {
        window.nama = "Sayangku Cintaku Cantikku Ferditaku Semestaku Duniaku";
        vketikhalo = "Halo, Sayangku Cintaku Cantikku Ferditaku Semestaku Duniaku✨";
        mulainama();
      }, 500);
    }
  }

  //Variable Pertanyaan Akhir
  var tanya = 'Mau Kado Gak Nih? 😶❤️';
  var opstanya = 'Ayo jawab 😆';
  var tompositif = 'Mau';
  var tomnegatif = 'Harus Mau';
    
  async function menuju(){
    const { value: answer } = await Swal.fire({
      title: tanya,
      text: opstanya,
      showCancelButton: true,
      confirmButtonText: tompositif,
      cancelButtonText: tomnegatif,
      allowOutsideClick: false,
      imageHeight: 80
    });
    
    if (answer) {
      // Jika "Mau" diklik
      pesanwhatsapp = "Makasii udah ngucapin sayangku ferditaku ultah ><";
      await swals.fire('OK!', 'Kirim jawabannya ke WhatsApp aku, ya!', 'success');
      window.location = "https://api.whatsapp.com/send?phone=6281805758949&text=" + encodeURIComponent(pesanwhatsapp);
    } else {
      // Jika "Engga" diklik
      await Swal.fire({
        title: 'Harus Mau Ya Sayang 😜',
        showConfirmButton: false,
        timer: 1500
      });
      // Kembali ke pertanyaan awal
      menuju();
    }
  }
</script>
<script src="https://malasid.github.io/html/hbd.js"></script>
<!-- Sampai Sini -->
</body>
</html>