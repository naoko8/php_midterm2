  @if($user->is_admin==1){
        <a href="{{ route('students') }}" >Students</a>
        <a href="{{ route('classes') }}" >Classes</a>
    }
    @endif
    @if($user->is_admin==0){
    <a href="{{ route('my_classes') }}" >My classes</a>
    @endif


