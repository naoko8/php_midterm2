@foreach($students as $student)
            <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">
                {{$student->email}}
            </div>


            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                {{$student->id}}
            </div>
            <div>
                {{$student->class}}
            </div>
@endforeach

