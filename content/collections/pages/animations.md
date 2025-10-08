---
id: dff3ab9c-562f-45e6-9e95-f1e3abe1c660
blueprint: page
title: Animations
builder:
  -
    id: mghmu1tm
    text:
      -
        type: paragraph
        content:
          -
            type: text
            text: 'In this example, we use Alpine.js to add a smooth animation as Livewire fetches new entries. Check out the code below to see how straightforward the setup is! For a deeper dive, visit the '
          -
            type: text
            marks:
              -
                type: link
                attrs:
                  href: 'https://livewirefilters.com/advanced/transitions-animations'
                  rel: null
                  target: _blank
                  title: null
            text: 'animations documentation'
          -
            type: text
            text: .
    type: text
    enabled: true
  -
    id: mghn7fgw
    code:
      code: |-
        <div
            x-data="{ loading: false }"
            x-init="
                $wire.on('filter-updated', () => {
                    loading = true;
                });
                $wire.on('entries-updated', () => {
                    setTimeout(() => {
                        loading = false;
                    }, 150);
                });
            "
        >
            {{ if (entries | length)  > 0 }}
            <div class="grid grid-cols-1 @2xl:grid-cols-2 @5xl:grid-cols-3 @6xl:grid-cols-4 gap-8">
                {{ entries }}
                <div
                    class="flex flex-col bg-gray-100 h-full rounded p-4 transition-all duration-300 ease-out"
                    wire:key="{{ id }}"
                    x-data="{ index: {{ index }} }"
                    x-bind:style="`transition-delay: ${loading ? '0ms' : (index * 50) + 'ms'}`"
                    x-bind:class="loading ? 'opacity-0 scale-95 translate-y-4' : 'opacity-100 scale-100 translate-y-0'"
                >
                    {{# Rest of the entry template #}}
                </div>
                {{ /entries }}
            </div>
            <div class="mt-12 flex justify-center">
                {{ links }}
            </div>
            {{ else }}
            <div class="text-center">
                <div class="text-2xl font-bold mb-4">No results found</div>
                <div class="text-gray-500">Try adjusting your filters.
            </div>
            {{ /if }}
        </div>
      mode: htmlmixed
    language: antlers
    type: code
    enabled: true
updated_by: 935d2204-f6fd-4b26-ac58-6c66c4675ef1
updated_at: 1759907312
template: examples/animations
---
