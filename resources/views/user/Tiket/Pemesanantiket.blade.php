@extends('Templates.User.User-template')

@section('title')
KKH | Pemesanan Tiket — Kampoeng Heritage Kajoetangan
@endsection

@section('body')
<main class="flex-grow bg-[#FFFCF5] px-4 py-10 font-body sm:px-6 sm:py-14 lg:px-8">
    <div class="mx-auto max-w-7xl">
        {{-- Page heading --}}
        <header class="mb-9 max-w-3xl">
            <p class="mb-3 flex items-center gap-2 text-xs font-semibold uppercase tracking-[0.25em] text-[#4A3627]">
                <span class="h-px w-8 bg-[#4A3627]"></span>
                Kampoeng Heritage Kajoetangan
            </p>
            <h1 class="font-display text-3xl font-bold leading-tight text-gray-900 sm:text-4xl md:text-5xl">
                Pemesanan Tiket
            </h1>
            <p class="mt-3 max-w-2xl text-sm leading-relaxed text-gray-700 sm:text-base">
                Rencanakan kunjungan Anda dan nikmati perjalanan menyusuri kisah heritage di jantung Kota Malang.
            </p>
        </header>

        <form action="{{ route('pembayaran.index') }}" method="POST" id="ticket-booking-form" class="grid grid-cols-1 items-start gap-8 lg:grid-cols-12">
            @csrf

            {{-- Checkout form --}}
            <div class="space-y-6 lg:col-span-8">
                {{-- Step 1: Visitor details --}}
                <section class="rounded-xl border border-[#4A3627]/10 bg-white p-5 shadow-sm sm:p-7" aria-labelledby="visitor-heading">
                    <div class="mb-6 flex items-center gap-3">
                        <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-[#4A3627] font-semibold text-white">1</span>
                        <div>
                            <h2 id="visitor-heading" class="font-display text-xl font-bold text-gray-900 sm:text-2xl">Detail Pengunjung</h2>
                            <p class="mt-1 text-sm text-gray-600">Masukkan informasi untuk pemesanan tiket.</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">
                        <div>
                            <label for="visitor-name" class="mb-2 block text-sm font-semibold text-gray-800">Nama Lengkap</label>
                            <input id="visitor-name" name="name" type="text" value="{{ old('name') }}" required maxlength="100" autocomplete="name" placeholder="Nama lengkap Anda"
                                class="w-full rounded-lg border border-[#4A3627]/20 bg-[#FFFCF5] px-4 py-3 text-sm text-gray-900 placeholder:text-gray-500 focus:border-[#4A3627] focus:outline-none focus:ring-2 focus:ring-[#4A3627]">
                            @error('name')<p class="mt-1.5 text-sm text-red-700">{{ $message }}</p>@enderror
                        </div>

                        <div>
                            <label for="visitor-email" class="mb-2 block text-sm font-semibold text-gray-800">Email</label>
                            <input id="visitor-email" name="email" type="email" value="{{ old('email') }}" required maxlength="100" autocomplete="email" placeholder="nama@email.com"
                                class="w-full rounded-lg border border-[#4A3627]/20 bg-[#FFFCF5] px-4 py-3 text-sm text-gray-900 placeholder:text-gray-500 focus:border-[#4A3627] focus:outline-none focus:ring-2 focus:ring-[#4A3627]">
                            @error('email')<p class="mt-1.5 text-sm text-red-700">{{ $message }}</p>@enderror
                        </div>

                        <div>
                            <label for="visitor-phone" class="mb-2 block text-sm font-semibold text-gray-800">No. WhatsApp</label>
                            <input id="visitor-phone" name="phone" type="tel" value="{{ old('phone') }}" required maxlength="30" autocomplete="tel" placeholder="08xxxxxxxxxx"
                                class="w-full rounded-lg border border-[#4A3627]/20 bg-[#FFFCF5] px-4 py-3 text-sm text-gray-900 placeholder:text-gray-500 focus:border-[#4A3627] focus:outline-none focus:ring-2 focus:ring-[#4A3627]">
                            @error('phone')<p class="mt-1.5 text-sm text-red-700">{{ $message }}</p>@enderror
                        </div>

                        <div>
                            <label for="visit-date" class="mb-2 block text-sm font-semibold text-gray-800">Tanggal Kunjungan</label>
                            <input id="visit-date" name="visit_date" type="date" value="{{ old('visit_date') }}" min="{{ now()->toDateString() }}" required
                                class="w-full rounded-lg border border-[#4A3627]/20 bg-[#FFFCF5] px-4 py-3 text-sm text-gray-900 focus:border-[#4A3627] focus:outline-none focus:ring-2 focus:ring-[#4A3627]">
                            @error('visit_date')<p class="mt-1.5 text-sm text-red-700">{{ $message }}</p>@enderror
                        </div>
                    </div>
                </section>

                {{-- Step 2: Ticket type --}}
                <section class="rounded-xl border border-[#4A3627]/10 bg-white p-5 shadow-sm sm:p-7" aria-labelledby="ticket-heading">
                    <div class="mb-6 flex items-center gap-3">
                        <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-[#4A3627] font-semibold text-white">2</span>
                        <div>
                            <h2 id="ticket-heading" class="font-display text-xl font-bold text-gray-900 sm:text-2xl">Pilih Jenis Tiket</h2>
                            <p class="mt-1 text-sm text-gray-600">Pilih kategori tiket yang sesuai untuk kunjungan Anda.</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                        <label for="ticket-domestic" class="ticket-card relative flex cursor-pointer rounded-xl border-2 border-[#4A3627]/20 bg-[#FFFCF5] p-5 transition-colors hover:border-[#4A3627]/60 focus-within:ring-2 focus-within:ring-[#4A3627]">
                            <input id="ticket-domestic" class="peer sr-only" type="radio" name="ticket_type" value="lokal" data-price="5000" checked>
                            <span class="pointer-events-none absolute right-4 top-4 flex h-5 w-5 items-center justify-center rounded-full border border-[#4A3627]/40 text-transparent peer-checked:border-[#4A3627] peer-checked:bg-[#4A3627] peer-checked:text-white">
                                <i class="fas fa-check text-[10px]"></i>
                            </span>
                            <span class="block">
                                <span class="mb-3 inline-flex rounded-md bg-[#4A3627]/10 px-2.5 py-1 text-xs font-semibold uppercase tracking-wide text-[#4A3627]">Domestik</span>
                                <span class="block font-display text-lg font-bold text-gray-900">Tiket Domestik</span>
                                <span class="mt-2 block text-sm text-gray-600">Untuk pengunjung dalam negeri.</span>
                                <span class="mt-4 block text-lg font-bold text-[#4A3627]">Rp 5.000 <span class="text-sm font-normal text-gray-600">/ orang</span></span>
                            </span>
                        </label>

                        <label for="ticket-international" class="ticket-card relative flex cursor-pointer rounded-xl border-2 border-[#4A3627]/20 bg-[#FFFCF5] p-5 transition-colors hover:border-[#4A3627]/60 focus-within:ring-2 focus-within:ring-[#4A3627]">
                            <input id="ticket-international" class="peer sr-only" type="radio" name="ticket_type" value="mancanegara" data-price="10000">
                            <span class="pointer-events-none absolute right-4 top-4 flex h-5 w-5 items-center justify-center rounded-full border border-[#4A3627]/40 text-transparent peer-checked:border-[#4A3627] peer-checked:bg-[#4A3627] peer-checked:text-white">
                                <i class="fas fa-check text-[10px]"></i>
                            </span>
                            <span class="block">
                                <span class="mb-3 inline-flex rounded-md bg-[#4A3627]/10 px-2.5 py-1 text-xs font-semibold uppercase tracking-wide text-[#4A3627]">International</span>
                                <span class="block font-display text-lg font-bold text-gray-900">Tiket Mancanegara</span>
                                <span class="mt-2 block text-sm text-gray-600">Untuk pengunjung dari luar negeri.</span>
                                <span class="mt-4 block text-lg font-bold text-[#4A3627]">Rp 10.000 <span class="text-sm font-normal text-gray-600">/ orang</span></span>
                            </span>
                        </label>
                    </div>
                    @error('ticket_type')<p class="mt-3 text-sm text-red-700">{{ $message }}</p>@enderror
                </section>

                {{-- Step 3: Ticket quantity --}}
                <section class="rounded-xl border border-[#4A3627]/10 bg-white p-5 shadow-sm sm:p-7" aria-labelledby="quantity-heading">
                    <div class="mb-6 flex items-center gap-3">
                        <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-[#4A3627] font-semibold text-white">3</span>
                        <div>
                            <h2 id="quantity-heading" class="font-display text-xl font-bold text-gray-900 sm:text-2xl">Jumlah Tiket</h2>
                            <p class="mt-1 text-sm text-gray-600">Tentukan jumlah tiket yang ingin dipesan.</p>
                        </div>
                    </div>

                    <div class="flex w-fit items-center gap-5 rounded-xl border border-[#4A3627]/15 bg-[#FFFCF5] p-2">
                        <button type="button" id="quantity-minus" aria-label="Kurangi jumlah tiket" class="flex h-11 w-11 items-center justify-center rounded-lg border border-[#4A3627]/20 text-lg font-semibold text-[#4A3627] transition-colors hover:bg-[#4A3627]/5 focus:outline-none focus:ring-2 focus:ring-[#4A3627]">−</button>
                        <output id="quantity-display" class="min-w-8 text-center text-lg font-bold text-gray-900" aria-live="polite">1</output>
                        <button type="button" id="quantity-plus" aria-label="Tambah jumlah tiket" class="flex h-11 w-11 items-center justify-center rounded-lg bg-[#4A3627] text-lg font-semibold text-white transition-colors hover:bg-[#36271a] focus:outline-none focus:ring-2 focus:ring-[#4A3627] focus:ring-offset-2">+</button>
                        <input type="hidden" id="quantity-input" name="quantity" value="1">
                    </div>
                    @error('quantity')<p class="mt-2 text-sm text-red-700">{{ $message }}</p>@enderror
                </section>

                {{-- Step 4: Payment method --}}
                <section class="rounded-xl border border-[#4A3627]/10 bg-white p-5 shadow-sm sm:p-7" aria-labelledby="payment-heading">
                    <div class="mb-6 flex items-center gap-3">
                        <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-[#4A3627] font-semibold text-white">4</span>
                        <div>
                            <h2 id="payment-heading" class="font-display text-xl font-bold text-gray-900 sm:text-2xl">Metode Pembayaran</h2>
                            <p class="mt-1 text-sm text-gray-600">Pilih metode pembayaran yang Anda inginkan.</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 gap-3 sm:grid-cols-3" role="radiogroup" aria-label="Metode pembayaran">
                        <label for="payment-qris" class="payment-card flex cursor-pointer items-center gap-3 rounded-xl border-2 border-[#4A3627]/20 bg-[#FFFCF5] p-4 transition-colors hover:border-[#4A3627]/60 focus-within:ring-2 focus-within:ring-[#4A3627]">
                            <input id="payment-qris" class="sr-only" type="radio" name="payment_method" value="qris" checked>
                            <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-white text-[#4A3627] shadow-sm"><i class="fas fa-qrcode text-xl"></i></span>
                            <span><span class="block font-semibold text-gray-900">QRIS</span><span class="mt-0.5 block text-xs text-gray-600">Scan &amp; bayar</span></span>
                        </label>
                        <label for="payment-transfer" class="payment-card flex cursor-pointer items-center gap-3 rounded-xl border-2 border-[#4A3627]/20 bg-[#FFFCF5] p-4 transition-colors hover:border-[#4A3627]/60 focus-within:ring-2 focus-within:ring-[#4A3627]">
                            <input id="payment-transfer" class="sr-only" type="radio" name="payment_method" value="transfer">
                            <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-white text-xs font-bold text-[#4A3627] shadow-sm">BCA<br>/ MANDIRI</span>
                            <span><span class="block font-semibold text-gray-900">Transfer Bank</span><span class="mt-0.5 block text-xs text-gray-600">BCA / Mandiri</span></span>
                        </label>
                        <label for="payment-ewallet" class="payment-card flex cursor-pointer items-center gap-3 rounded-xl border-2 border-[#4A3627]/20 bg-[#FFFCF5] p-4 transition-colors hover:border-[#4A3627]/60 focus-within:ring-2 focus-within:ring-[#4A3627]">
                            <input id="payment-ewallet" class="sr-only" type="radio" name="payment_method" value="ewallet">
                            <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-white text-xs font-bold text-[#4A3627] shadow-sm">GoPay<br>/ OVO</span>
                            <span><span class="block font-semibold text-gray-900">E-Wallet</span><span class="mt-0.5 block text-xs text-gray-600">GoPay / OVO</span></span>
                        </label>
                    </div>
                    @error('payment_method')<p class="mt-3 text-sm text-red-700">{{ $message }}</p>@enderror
                </section>
            </div>

            {{-- Sticky order summary --}}
            <aside class="lg:col-span-4">
                <section class="overflow-hidden rounded-xl border border-[#4A3627]/20 bg-white shadow-md lg:sticky lg:top-8" aria-labelledby="summary-heading">
                    <div class="border-b border-dashed border-[#4A3627]/25 bg-[#4A3627]/5 px-6 py-5">
                        <p class="mb-1 text-xs font-semibold uppercase tracking-[0.2em] text-[#4A3627]">Kampoeng Heritage Kajoetangan</p>
                        <h2 id="summary-heading" class="font-display text-2xl font-bold text-gray-900">Ringkasan Pesanan</h2>
                    </div>

                    <div class="space-y-4 px-6 py-6 text-sm">
                        <div class="flex justify-between gap-4">
                            <span class="text-gray-600">Tanggal Kunjungan</span>
                            <span id="summary-date" class="text-right font-medium text-gray-900">Pilih tanggal</span>
                        </div>
                        <div class="flex justify-between gap-4">
                            <span class="text-gray-600">Jenis Tiket</span>
                            <span id="summary-ticket" class="text-right font-medium text-gray-900">Domestik · Rp 5.000</span>
                        </div>
                        <div class="flex justify-between gap-4">
                            <span class="text-gray-600">Jumlah Tiket</span>
                            <span id="summary-quantity" class="text-right font-medium text-gray-900">1 tiket</span>
                        </div>
                        <div class="border-t border-dashed border-[#4A3627]/25"></div>
                        <div class="flex justify-between gap-4">
                            <span class="text-gray-600">Subtotal</span>
                            <span id="summary-subtotal" class="font-medium text-gray-900">Rp 5.000</span>
                        </div>
                        <div class="flex justify-between gap-4">
                            <span class="text-gray-600">Biaya Layanan</span>
                            <span id="summary-fee" class="font-medium text-gray-900">Rp 2.000</span>
                        </div>
                    </div>

                    <div class="mx-6 border-t border-dashed border-[#4A3627]/25"></div>
                    <div class="px-6 py-5">
                        <div class="flex items-end justify-between gap-4">
                            <span class="font-semibold text-gray-800">Total Bayar</span>
                            <span id="summary-total" class="font-display text-2xl font-bold text-[#4A3627]">Rp 7.000</span>
                        </div>
                        <button type="submit" class="mt-6 inline-flex w-full items-center justify-center gap-2 rounded-lg bg-[#4A3627] px-5 py-3.5 text-sm font-semibold text-white transition-all hover:scale-[1.02] hover:bg-[#36271a] focus:outline-none focus:ring-2 focus:ring-[#4A3627] focus:ring-offset-2">
                            <i class="fas fa-lock text-xs"></i>
                            Bayar Sekarang
                        </button>
                        <p class="mt-3 text-center text-xs text-gray-500">Pembayaran Anda diproses dengan aman.</p>
                    </div>
                </section>
            </aside>
        </form>
    </div>
</main>

{{-- Checkout summary and selection interactions --}}
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var ticketForm = document.getElementById('ticket-booking-form');
        if (!ticketForm) return;

        var ticketCards = document.querySelectorAll('.ticket-card');
        var paymentCards = document.querySelectorAll('.payment-card');
        var quantityInput = document.getElementById('quantity-input');
        var quantityDisplay = document.getElementById('quantity-display');
        var dateInput = document.getElementById('visit-date');
        var serviceFee = 2000;

        function formatRupiah(amount) {
            return 'Rp ' + amount.toLocaleString('id-ID');
        }

        function refreshSummary() {
            var selectedTicket = ticketForm.querySelector('input[name="ticket_type"]:checked');
            var ticketPrice = selectedTicket ? Number(selectedTicket.dataset.price) : 5000;
            var quantity = Math.max(1, Number(quantityInput.value) || 1);
            var subtotal = ticketPrice * quantity;
            var ticketName = selectedTicket && selectedTicket.value === 'mancanegara' ? 'Mancanegara' : 'Domestik';

            quantityInput.value = String(quantity);
            quantityDisplay.textContent = String(quantity);
            document.getElementById('summary-ticket').textContent = ticketName + ' · ' + formatRupiah(ticketPrice);
            document.getElementById('summary-quantity').textContent = quantity + ' tiket';
            document.getElementById('summary-subtotal').textContent = formatRupiah(subtotal);
            document.getElementById('summary-fee').textContent = formatRupiah(serviceFee);
            document.getElementById('summary-total').textContent = formatRupiah(subtotal + serviceFee);

            if (dateInput.value) {
                var date = new Date(dateInput.value + 'T00:00:00');
                document.getElementById('summary-date').textContent = new Intl.DateTimeFormat('id-ID', {
                    day: 'numeric',
                    month: 'long',
                    year: 'numeric'
                }).format(date);
            } else {
                document.getElementById('summary-date').textContent = 'Pilih tanggal';
            }
        }

        ticketCards.forEach(function (card) {
            var radio = card.querySelector('input[name="ticket_type"]');
            radio.addEventListener('change', function () {
                ticketCards.forEach(function (item) {
                    item.classList.remove('border-[#4A3627]', 'bg-[#4A3627]/5');
                    item.classList.add('border-[#4A3627]/20', 'bg-[#FFFCF5]');
                });
                if (radio.checked) {
                    card.classList.remove('border-[#4A3627]/20', 'bg-[#FFFCF5]');
                    card.classList.add('border-[#4A3627]', 'bg-[#4A3627]/5');
                }
                refreshSummary();
            });
        });

        paymentCards.forEach(function (card) {
            var radio = card.querySelector('input[name="payment_method"]');
            radio.addEventListener('change', function () {
                paymentCards.forEach(function (item) {
                    item.classList.remove('border-[#4A3627]', 'bg-[#4A3627]/5');
                    item.classList.add('border-[#4A3627]/20', 'bg-[#FFFCF5]');
                });
                if (radio.checked) {
                    card.classList.remove('border-[#4A3627]/20', 'bg-[#FFFCF5]');
                    card.classList.add('border-[#4A3627]', 'bg-[#4A3627]/5');
                }
            });
        });

        document.getElementById('quantity-minus').addEventListener('click', function () {
            quantityInput.value = String(Math.max(1, Number(quantityInput.value) - 1));
            refreshSummary();
        });

        document.getElementById('quantity-plus').addEventListener('click', function () {
            quantityInput.value = String(Math.min(50, Number(quantityInput.value) + 1));
            refreshSummary();
        });

        quantityInput.value = '1';
        ticketForm.querySelector('input[name="ticket_type"]:checked').dispatchEvent(new Event('change'));
        ticketForm.querySelector('input[name="payment_method"]:checked').dispatchEvent(new Event('change'));
        dateInput.addEventListener('change', refreshSummary);
        refreshSummary();
    });
</script>
@endsection
