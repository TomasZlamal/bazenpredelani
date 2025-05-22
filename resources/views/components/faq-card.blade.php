<div class="mb-4 last-of-type:mb-0 rounded-lg shadow-xs">
    <input type="checkbox" id="faq{{$id}}" class="peer hidden" />
    <label
{{--        role="button"--}}
        for="faq{{$id}}"
        class="icon-faq block relative cursor-pointer font-medium text-bs-blue-900 bg-bs-blue-200 bg-opacity-45 py-4 pl-4 pr-8 peer-checked:rounded-t-lg peer-checked:rounded-b-none rounded-lg peer-checked:border-b-bs-blue-300/75 peer-checked:border-b-2 mb-0"
    >
        <p class="font-medium mb-0 text-bs-blue-900">{{$question}}</p>
    </label>
    <div class="p-4 hidden peer-checked:block bg-bs-blue-300/50 bg-opacity-30 rounded-b-lg">
        <p class="text-bs-blue-950">
            {{$slot}}
        </p>
    </div>
</div>