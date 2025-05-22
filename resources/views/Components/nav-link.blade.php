@props (['active' => false, 'type' =>  'a'])

<a class="{{ $active ? ' text-white bg-gray-900' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} block rounded-md px-3 py-2 text-base font-medium" 
    {{$attributes}} >{{$slot}}</a>