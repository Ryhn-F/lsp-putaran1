<div>


   <a href="/orders/create">
    add</a> 
    <table>
        <thead>
            <tr>
            <th> Id</th>
            <th>Nama Peminjam</th>
            <th>Buku </th>
            <th>Tanggal Kembali</th>
            <th>Tanggal Pinjam</th>
            <th>Action</th>
             </tr>
        </thead>
        <tbody>
            @forelse ($orders as  $order)
            <tr>
            <td>{{ $order->id }}</td>
            <td>{{ $order->anggota?->nama ?? '-' }}</td>
            <td>{{ $order->book?->nama ?? '-'}}</td>
            <td>{{ $order->tanggal_kembali ?? '-' }}</th>
            <td>{{ $order->tanggal_pinjam ?? '-' }}</td>
            <td>
                <a href="/orders/edit/{{ $order->id }}">
                edit
                </a>

                <form method="post" action="/orders/{{ $order->id }}" onsubmit="return confirm('Are you sure mau delet dis order ?')">
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