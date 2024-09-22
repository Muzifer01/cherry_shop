<!-- Footer -->
<footer class="bg-body-tertiary text-center">
    <!-- Grid container -->
    <div class="container p-4">
        <!-- Section: Social media -->
        <section class="mb-4">
            @foreach($social as $item)
                <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="{{ $item['url'] }}" role="button">
                    <i class="fab fa-{{ strtolower($item['name']) }}"></i>
                </a>
            @endforeach
        </section>
        <!-- Section: Social media -->

        <!-- Section: Legal information -->
        <section class="mb-4">
            @foreach($legal as $item)
                <p>{{ $item['name'] }}</p>
            @endforeach
        </section>
        <!-- Section: Legal information -->

        <!-- Section: Links and Information -->
        <section>
            <div class="row">
                <!-- Grid column: Policies -->
                <div class="col">
                    <h5 class="text-uppercase">Políticas</h5>
                    <ul class="list-unstyled mb-0">
                        @foreach($policies as $item)
                            <li>
                                <a class="text-body" href="{{ $item['url'] }}">{{ $item['name'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <!-- Grid column: Policies -->

                <!-- Grid column: Contact Information -->
                <div class="col">
                    <h5 class="text-uppercase">Contacto</h5>
                    <ul class="list-unstyled mb-0">
                        @foreach($contact as $item)
                            <li>{{ $item['name'] }}</li>
                        @endforeach
                    </ul>
                </div>
                <!-- Grid column: Contact Information -->

                <!-- Grid column: Opening Hours -->
                <div class="col">
                    <h5 class="text-uppercase">Horario de apertura</h5>
                    <ul class="list-unstyled mb-0">
                        @foreach($opening_hours as $item)
                            <li>{{ $item['name'] }}</li>
                        @endforeach
                    </ul>
                </div>
                <!-- Grid column: Opening Hours -->
            </div>
        </section>
        <!-- Section: Links and Information -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
        © {{ date('Y') }} Copyright:
        <a class="text-reset fw-bold" href="/">[Nombre de la Empresa]</a>. Todos los derechos reservados.
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->
