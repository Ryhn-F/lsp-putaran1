<div>


   <a href="/books/create">
    add</a> 
    <table>
        <thead>
            <tr>
            <th> Id</th>
            <th>Nama Buku</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>Stock</th>
            <th>Action</th>
             </tr>
        </thead>
        <tbody>
            @forelse ($books as  $book)
            <tr>
            <td>{{ $book->id }}</td>
            <td>{{ $book->nama }}</td>
            <td>{{ $book->pengarang }}</td>
            <td>{{ $book->penerbit }}</th>
            <td>{{ $book->tahun_terbit }}</td>
            <td>{{ $book->stock }}</td>
            <td>
                <a href="/books/edit/{{ $book->id }}">
                edit
                </a>

                <form method="post" action="/books/{{ $book->id }}" onsubmit="return confirm('Are you sure mau delet dis book ?')">
                @csrf
                @method('DELETE')

                <button type="submit">
                    delete
                </button>
                </form>
            </td>

            </tr>
           
            @empty
            <tr>
            <td> empty</td>
            </tr>
            

            @endforelse

        </tbody>
        


    </table>
    

    
    
</div>