---
id: a1f3c2d4-7b6e-4f1a-9c2d-inf1n1tescr0ll
blueprint: page
title: 'Infinite Scroll'
template: examples/infinite-scroll
builder:
  -
    id: 5Awh7uPVtYiVFQD7V9zxk
    text:
      -
        type: paragraph
        content:
          - type: text
            text: 'This demo uses '
          -
            type: text
            marks:
              - type: bold
            text: 'auto-loading infinite scroll'
          - type: text
            text: ', more entries load automatically as you reach the bottom, via the {{ livewire-filters:load_more auto="true" }} tag. Prefer a manual control? Drop auto="true" for a '
          -
            type: text
            marks:
              - type: bold
            text: '“Load more”'
          - type: text
            text: ' button instead.'
    type: text
    enabled: true
  -
    id: cjAqCj9Q_W0pl02JYTQiH
    code:
      code: |-
        <div id="livewire-collection">
            <div>
                <div class="grid grid-cols-12 gap-4 md:gap-8 xl:gap-12">
                    <!-- Filters Sidebar -->
                    <div class="col-span-12 xl:col-span-3">
                        <div class="p-4 xl:p-0">
                            <div class="mb-8">
                                <div class="mb-2 font-bold">
                                    Search by name
                                </div>
                                {{ livewire:lf-text-filter
                                    blueprint="cars.car"
                                    field="title"
                                    condition="contains"
                                    placeholder="Search cars..."
                                }}
                            </div>
                            <div class="mb-8">
                                <div class="mb-2 font-bold">
                                    Car brand
                                </div>
                                {{ livewire:lf-checkbox-filter
                                    blueprint="cars.car"
                                    field="car_brand"
                                    condition="taxonomy"
                                }}
                            </div>
                            <div class="mb-8">
                                <div class="mb-2 font-bold">
                                    Transmission
                                </div>
                                {{ livewire:lf-radio-filter
                                    blueprint="cars.car"
                                    field="transmission"
                                    condition="is"
                                }}
                            </div>
                            <div class="mb-8">
                                <div class="mb-2 font-bold">
                                    Fuel type
                                </div>
                                {{ livewire:lf-select-filter
                                    blueprint="cars.car"
                                    field="fuel_type"
                                    condition="is"
                                }}
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 xl:col-span-9">
                        <div class="mb-4">
                            {{ livewire:lf-tags blueprint="cars.car" fields="title|car_brand|transmission|fuel_type" }}
                        </div>
                        <div class="@container">
                            {{ livewire-collection:cars
                                paginate="6"
                                infinite_scroll="true"
                                view="infinite-scroll"
                            }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
      mode: htmlmixed
    language: antlers
    type: code
    enabled: true
hide_title: false
updated_by: 935d2204-f6fd-4b26-ac58-6c66c4675ef1
updated_at: 1781876588
---
This demo uses `infinite_scroll="true"` with a custom `view="infinite-scroll"`. The view drops in the `livewire-filters:load_more` tag with `auto="true"`, so more cars **load automatically** as you scroll. Remove `auto="true"` and the same tag renders a manual **Load more** button instead.
