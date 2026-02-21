<div>


   <a href="/users/create">
    add</a> 
    <table>
        <thead>
            <tr>
            <th> Id</th>
            <th>Username</th>
            <th>Nama Anggota</th>
            <th>Kelas</th>
            <th>jurusan</th>
            <th>Action</th>
             </tr>
        </thead>
        <tbody>
            @forelse ($users as  $user)
            @if($user->role !== 'admin')
            <tr>
            <td>{{ $user->anggota?->id ?? '-' }}</td>
            <td>{{ $user->username }}</td>
            <td>{{ $user->anggota?->nama ?? '-' }}</td>
            <td>{{ $user->anggota?->kelas ?? '-' }}</td>
            <td>{{ $user->anggota?->jurusan ?? '-'}}</th>
            <td>
                <a href="/users/edit/{{ $user->id }}">
                edit
                </a>

                <form method="post" action="/users/{{ $user->id }}" onsubmit="return confirm('Are you sure mau delet dis book ?')">
                @csrf
                @method('DELETE')

                <button type="submit">
                    delete
                </button>
                </form>
            </td>

            </tr>
            @endif
           
            @empty
            <tr>
            <td> empty</td>
            </tr>
            

            @endforelse

        </tbody>
        


    </table>
    

    
    
</div>