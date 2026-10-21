@extends('Templates.User.User-template')

@section('title')
KKH | Beri Masukan
@endsection

@section('body')
<main class="flex-grow bg-[#FFFCF5] px-4 py-12 sm:px-6 sm:py-16 lg:px-8">
    <div class="mx-auto max-w-3xl">
        <header class="mb-8 text-center sm:mb-10">
            <span class="mb-3 inline-flex items-center gap-2 text-xs font-semibold uppercase tracking-[0.28em] text-[#4A3627]/70">
                <span class="h-px w-8 bg-[#B08D57]"></span>
                Kampoeng Heritage Kajoetangan
                <span class="h-px w-8 bg-[#B08D57]"></span>
            </span>
            <h1 class="font-display text-3xl font-bold leading-tight text-[#1B1815] sm:text-4xl md:text-5xl">
                Suara Anda Membangun Kajoetangan
            </h1>
            <p class="mx-auto mt-4 max-w-xl text-sm leading-relaxed text-[#4A3627]/75 sm:text-base">
                Ceritakan pengalaman dan saran Anda. Setiap masukan membantu warga menjaga kampung heritage ini tetap nyaman dan berkesan.
            </p>
        </header>

        <section class="rounded-2xl border border-[#4A3627]/10 bg-white p-6 shadow-lg shadow-[#4A3627]/10 sm:p-8 md:p-10">
            @if (session('success'))
                <div role="status" class="mb-6 flex items-start gap-3 rounded-xl border border-green-200 bg-green-50 p-4 text-sm text-green-800">
                    <i class="fas fa-circle-check mt-0.5"></i>
                    <p>{{ session('success') }}</p>
                </div>
            @endif

            @if (session('error'))
                <div role="alert" class="mb-6 flex items-start gap-3 rounded-xl border border-red-200 bg-red-50 p-4 text-sm text-red-800">
                    <i class="fas fa-circle-exclamation mt-0.5"></i>
                    <p>{{ session('error') }}</p>
                </div>
            @endif

            <form action="{{ route('feedback.store') }}" method="POST" class="space-y-5">
                @csrf
                <input type="hidden" name="feedback_label" value="{{ old('feedback_label', 'Masukan Pengunjung') }}">

                <div>
                    <label for="feedback-name" class="mb-2 block text-sm font-semibold text-[#1B1815]">
                        Nama Lengkap <span class="text-red-700">*</span>
                    </label>
                    <input id="feedback-name" type="text" name="feedback_sender_name" value="{{ old('feedback_sender_name') }}" required maxlength="100" autocomplete="name" placeholder="Masukkan nama lengkap Anda"
                        class="w-full rounded-xl border border-[#4A3627]/20 bg-[#FBF8F1] px-4 py-3 text-sm text-[#1B1815] placeholder:text-[#4A3627]/45 focus:border-[#4A3627] focus:outline-none focus:ring-2 focus:ring-[#4A3627]">
                    @error('feedback_sender_name')
                        <p class="mt-2 text-sm text-red-700">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="feedback-email" class="mb-2 block text-sm font-semibold text-[#1B1815]">
                        Email <span class="text-red-700">*</span>
                    </label>
                    <input id="feedback-email" type="email" name="feedback_sender_email" value="{{ old('feedback_sender_email') }}" required maxlength="100" autocomplete="email" placeholder="nama@email.com"
                        class="w-full rounded-xl border border-[#4A3627]/20 bg-[#FBF8F1] px-4 py-3 text-sm text-[#1B1815] placeholder:text-[#4A3627]/45 focus:border-[#4A3627] focus:outline-none focus:ring-2 focus:ring-[#4A3627]">
                    @error('feedback_sender_email')
                        <p class="mt-2 text-sm text-red-700">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="feedback-category" class="mb-2 block text-sm font-semibold text-[#1B1815]">
                        Kategori Masukan <span class="text-red-700">*</span>
                    </label>
                    <select id="feedback-category" name="feedback_message_type" required
                        class="w-full rounded-xl border border-[#4A3627]/20 bg-[#FBF8F1] px-4 py-3 text-sm text-[#1B1815] focus:border-[#4A3627] focus:outline-none focus:ring-2 focus:ring-[#4A3627]">
                        <option value="" disabled {{ old('feedback_message_type') ? '' : 'selected' }}>Pilih kategori masukan</option>
                        @foreach (['Pelayanan', 'Fasilitas', 'Kebersihan', 'Lainnya'] as $category)
                            <option value="{{ $category }}" {{ old('feedback_message_type') === $category ? 'selected' : '' }}>{{ $category }}</option>
                        @endforeach
                    </select>
                    @error('feedback_message_type')
                        <p class="mt-2 text-sm text-red-700">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="feedback-message" class="mb-2 block text-sm font-semibold text-[#1B1815]">
                        Pesan / Saran <span class="text-red-700">*</span>
                    </label>
                    <textarea id="feedback-message" name="feedback_sender_message" rows="4" required placeholder="Tuliskan pengalaman, saran, atau hal yang perlu kami perbaiki..."
                        class="w-full resize-y rounded-xl border border-[#4A3627]/20 bg-[#FBF8F1] px-4 py-3 text-sm leading-relaxed text-[#1B1815] placeholder:text-[#4A3627]/45 focus:border-[#4A3627] focus:outline-none focus:ring-2 focus:ring-[#4A3627]">{{ old('feedback_sender_message') }}</textarea>
                    @error('feedback_sender_message')
                        <p class="mt-2 text-sm text-red-700">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit"
                    class="w-full rounded-xl bg-[#4A3627] px-5 py-3.5 text-sm font-semibold text-[#FFFCF5] transition-transform hover:scale-[1.02] hover:bg-[#36271A] focus:outline-none focus:ring-2 focus:ring-[#4A3627] focus:ring-offset-2">
                    <i class="fas fa-paper-plane mr-2"></i>
                    Kirim Masukan
                </button>
            </form>

            <p class="mt-5 text-center text-xs leading-relaxed text-[#4A3627]/60">
                Masukan Anda digunakan untuk membantu meningkatkan pelayanan dan menjaga kenyamanan pengunjung.
            </p>
        </section>
    </div>
</main>
@endsection
