<div>

    <a href="/books/create">
    add</a>

    <table>
        <thead>
            <tr>
                <th>
                    Id
                </th>
                <th>
                    Nama Buku
                </th>
                <th>
                    Penerbit
                </th>
                <th>
                    Pengarang
                </th>
                <th>
                    tahun Terbit 
                </th>
                <th>
                    Stock
                </th>
                <th>
                    action
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($books as $book )
            <tr>
                <td>
                    {{ $book->id }}
                </td>
                <td>
                    {{ $book->nama }}
                </td>
                <td>
                    {{ $book->penerbit }}
                </td>
                <td>
                    {{ $book->pengarang }}
                </td>
                <td>
                    {{ $book->tahun_terbit }}
                </td>
                <td>
                    {{ $book->stock }}
                </td>
                <td>
                    <a href="/books/edit/{{ $book->id }}">
                    edit
                </a>
                <form action="/books/{{ $book->id }}" method="post" onsubmit="return confirm('Are You sure wanna delete this?')">
                @csrf
                @method("DELETE")

                <button type="submit"> Delete </button>
                </form>
                </td>
            </tr>
                
            @empty
                
            @endforelse
        </tbody>
    </table>
</div>