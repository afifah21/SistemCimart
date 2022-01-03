@extends('webpage.app')
@section('content')
<head>
	<title>Pesanan Diproses</title>
</head>
<body>
	<div class="center">
        <img src="/webasset/img/pesanan.png" alt="Pesanan" width="514" height="514" top="248" left="196">
		<h1>Pesanan Anda Sedang Diproses</h1>
		<p class ="center-text">Silahkan kontak admin untuk selengkapnya</p>
        <p class="kontak-wa"><a href="https://api.whatsapp.com/send/?phone=6281380366824&text&app_absent=0">Kontak Saya!</a></p>
		<button href="(/home)" type="button" class="btn-home">Pergi ke Home</button>
	</div>

</body>
@endsection