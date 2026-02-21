<div>

    <a href="/orders/create">
    add</a>

    <table>
        <thead>
            <tr>
                <th>
                    Id
                </th>
                <th>
                    Peminjam
                </th>
                <th>
                    Buku
                </th>
                <th>
                    Tanggal pinjam
                </th>
                <th>
                    Tanggal Kembali
                </th>
                <th>
                    action
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($orders as $order )
            <tr>
                <td>
                    {{ $order->id }}
                </td>
                <td>
                    {{ $order->anggota?->nama ?? '-' }}
                </td>
                <td>
                    {{ $order->book?->nama ?? '-' }}
                </td>
                <td>
                    {{ $order->tanggal_pinjam ?? '-'}}
                </td>
                <td>
                    {{ $order->tanggal_kembali ?? '-' }}
                </td>
                <td>
                    <a href="/orders/edit/{{ $order->id }}">
                    edit
                </a>
                <form action="/orders/{{ $order->id }}" method="post" onsubmit="return confirm('Are You sure wanna delete this?')">
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