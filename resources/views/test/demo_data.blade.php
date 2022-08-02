<form action="/data/update">
    @csrf
    <input type="text" name="id" value="{{ $user->id }}" id="">
    <input type="text" name="email" value="{{ $user->email }}" id="">
</form>
