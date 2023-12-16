@component('mail::message')
<p><b>Hai teman teman 👋</b></p>

<p></p>

<p>1. Login ke akun dengan menggunakan email dan password berikut.</p>
<ul>
    <li>
        <p><span>Email</span>: <span style="font-weight:600">{{ $data['email'] }}</span></p>
    </li>
    <li>
        <p><span>Password</span>: <span style="font-weight:600">{{ $data['password'] }}</span></p>
    </li>
</ul>
<p>2. Memilih Calon Ketua Umum FOSTI 2023.</p>

<p><b>Salam,</b></p>
<p>Mas-Mas Ganteng FOSTI</p>
@endcomponent