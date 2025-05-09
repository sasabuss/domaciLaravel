@extends("layout")

@section('title')
    Contact
@endsection

@section('sadrzajStranice')

<div class="container my-5">
    <h2>Kontaktirajte nas</h2>
    <form action="" >
        <div class="mb-3">
            <label for="email" class="form-label">Email adresa</label>
            <input type="email" name="email"class="form-control" placeholder="Unesite email">
        </div>
        <div class="mb-3">
            <label for="subject" class="form-label">Naslov</label>
            <input type="text" name="subject" id="subject" class="form-control" placeholder="Naslov poruke">
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Poruka</label>
            <textarea name="message" class="form-control" rows="5" placeholder="Vaša poruka..."></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Pošalji</button>
    </form>
</div>

<div class="container my-5 d-flex justify-content-center">
    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23218.317670065888!2d21.938176!3d43.3291264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4755b11dfc87a527%3A0xdbcbf200f8904fd3!2z0KDQvtC80LDQvdGB0LA!5e0!3m2!1ssr!2srs!4v1746788804287!5m2!1ssr!2srs" 
        width="600" 
        height="450" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
</div>

@endsection
