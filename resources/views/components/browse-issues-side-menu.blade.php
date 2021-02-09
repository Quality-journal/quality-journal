<div class="w-3/4 sm:w-1/4 px-6 bg-gray-50 py-2 mt-3 h-64 min-h-full">

    <p class="text-xl font-semibold mb-5 text-dark border-b border-solid border-black text-left pb-2">Selections</p>

    @foreach($selections as $selection)
        <a href="/selection/{{ $selection->slug }}" class="ml-5 p-2 mb-2 hover:text-orange font-bold">{{ $selection->title }}</a> <i id="selection-{{ $selection->id }}" @click="toggleIssues = !toggleIssues"  class="float-right hover:text-orange fas fa-chevron-down cursor-pointer"></i><br>

        <ul class="mt-1 ml-5" id="issues-{{ $selection->id }}" v-show="toggleIssues">
            @foreach($issues as $issue)
                @if($issue->selection_id == $selection->id)
                    <li><a href="/issue/{{ $selection->slug }}/{{ $issue->slug }}" class="ml-5 p-2 hover:text-orange">{{ $issue->title }}</a></li>
                @endif
            @endforeach
        </ul>

    @endforeach

</div>
