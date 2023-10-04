<form wire:submit.prevent="updateprofile">
    <label for="">Name</label><br><br>
    <input type="text" wire:model="name"><br><br>
    @if($errors->has('name')) <p style="color:red">{{ $errors->first('name') }}</p> @endif
    <label for="">Email</label><br><br>
    <input type="text" wire:model="email"><br><br>
    @if($errors->has('email')) <p style="color:red">{{ $errors->first('email') }}</p> @endif
    <input type="submit" value="Send">
    @if($success)
        <p>
            Successfully Updated!
        </p>
    @endif
</form>
