<div>
    <form method="post">
        @csrf 
       <label for="anggota_id" class="block text-sm font-medium text-slate-700">Member Name</label>
        <select name="anggota_id" id="anggota_id"  required>
            <option value="" disabled selected>Select a Member...</option>
            @foreach($anggotas as $anggota)
                <option value="{{ $anggota->id }}" {{ old('anggota_id') == $anggota->id ? 'selected' : '' }}>{{ $anggota->nama }} ({{ $anggota->kelas }})</option>
            @endforeach
        </select>
        
        <label for="book_id"> Buku yang dipinjam</label>
        <select name="book_id" id="book_id" required>
            <option value="" disabled selected>Select a book...</option>
            @foreach ($books as $book )
            <option value="{{ $book->id }}" {{ old('book_id') == $book->id ? 'selected' : '' }}> {{ $book->nama }}</option>
            @endforeach
        </select>
        
        <label for="pengarang">Tanggal Pinjam</label>
        <input type="datetime-local" name="tanggal_pinjam" id="tanggal_pinjam" value="{{ old('tanggal_pinjam', date('Y-m-d\TH:i')) }}" required>

        
        <button type="submit"> Create </button>
    </form>
</div>