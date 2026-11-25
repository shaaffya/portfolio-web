<!doctype html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Respons Form - Portfolio</title>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<main class="container">
<header>
<h1>Respons Form CTA</h1>
<form method="POST" action="{{ route('logout') }}">
@csrf
<button type="submit">Keluar</button>
</form>
</header>

@if ($messages->total() === 0)
<p>Belum ada respons.</p>
@else
<table>
<thead>
<tr>
<th>Nama</th>
<th>Email</th>
<th>Pesan</th>
<th>Diterima</th>
</tr>
</thead>
<tbody>
@foreach ($messages as $message)
<tr>
<td>{{ $message->name }}</td>
<td><a href="mailto:{{ $message->email }}">{{ $message->email }}</a></td>
<td>{{ $message->message }}</td>
<td>{{ $message->created_at->format('d M Y, H:i') }}</td>
</tr>
@endforeach
</tbody>
</table>

<nav aria-label="Navigasi halaman">
@if ($messages->onFirstPage())
<span>Sebelumnya</span>
@else
<a href="{{ $messages->previousPageUrl() }}">Sebelumnya</a>
@endif

<span>Halaman {{ $messages->currentPage() }} dari {{ $messages->lastPage() }}</span>

@if ($messages->hasMorePages())
<a href="{{ $messages->nextPageUrl() }}">Berikutnya</a>
@else
<span>Berikutnya</span>
@endif
</nav>
@endif
</main>
</body>
</html>