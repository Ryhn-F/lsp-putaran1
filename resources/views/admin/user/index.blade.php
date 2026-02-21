<div>

    <a href="/users/create">
    add</a>

    <table>
        <thead>
            <tr>
                <th>
                    Id
                </th>
                <th>
                    Username
                </th>
                <th>
                    Nama Anggota
                </th>
                <th>
                    Kelas
                </th>
                <th>
                    Jurusan 
                </th>
                <th>
                    action
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user )
            <tr>
                <td>
                    {{ $user->id }}
                </td>
                <td>
                    {{ $user->username }}
                </td>
                <td>
                    {{ $user->anggota?->nama ?? '-' }}
                </td>
                <td>
                    {{ $user->anggota?->kelas ?? '-'}}
                </td>
                <td>
                    {{ $user->anggota?->jurusan ?? '-' }}
                </td>
                <td>
                    <a href="/users/edit/{{ $user->id }}">
                    edit
                </a>
                <form action="/users/{{ $user->id }}" method="post" onsubmit="return confirm('Are You sure wanna delete this?')">
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