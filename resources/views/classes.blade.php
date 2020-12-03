@foreach($classes as $class)
    <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">
        {{$class->user_id}}
        <button type="submit">Info </button>
        <button type="submit">Edit </button>
    </div>


    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
        {{$class->class_name}}
    </div>
@endforeach
