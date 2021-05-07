{{-- Show an icon depending on the parameter received --}}

@switch($icon)
    @case('user')
    <img src="https://img.icons8.com/ios/50/000000/user--v1.png"/>
    @break

    @case('task')
    <img src="https://img.icons8.com/ios/50/000000/task.png"/>
    @break

    @case('react')
        <img src="https://img.icons8.com/ios/50/000000/react-native.png"/>
        @break
    @default
        <p>Icon not found</p>
@endswitch
