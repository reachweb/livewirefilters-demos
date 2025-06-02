---
id: 1cc72c07-813d-41c5-adc6-a1715ba81af0
blueprint: page
title: Horizontal
updated_by: 935d2204-f6fd-4b26-ac58-6c66c4675ef1
updated_at: 1748850641
template: examples/horizontal
builder:
  -
    id: mbe84uxb
    text:
      -
        type: paragraph
        content:
          -
            type: text
            text: 'This example showcases '
          -
            type: text
            marks:
              -
                type: bold
            text: 'two additional filter views'
          -
            type: text
            text: ' that come with Livewire Filters and use AlpineJS to provide a '
          -
            type: text
            marks:
              -
                type: bold
            text: combobox
          -
            type: text
            text: ', allowing users to search and filter options. This is especially useful when implementing horizontal filters, as shown here, and when dealing with a large number of options.'
      -
        type: paragraph
        content:
          -
            type: text
            text: 'In this example, we are using:'
      -
        type: bulletList
        content:
          -
            type: listItem
            content:
              -
                type: paragraph
                content:
                  -
                    type: text
                    text: 'The advanced view of the '
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: LfCheckboxFilter
                  -
                    type: text
                    text: ' for the '
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Car Brand'
                  -
                    type: text
                    text: ' and '
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Special Category'
                  -
                    type: text
                    text: ' filters, with the searchable option enabled'
          -
            type: listItem
            content:
              -
                type: paragraph
                content:
                  -
                    type: text
                    text: 'The same advanced view of the '
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: LfSelectFilter
                  -
                    type: text
                    text: ' for the '
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: Transmission
                  -
                    type: text
                    text: ' and '
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Fuel Type'
                  -
                    type: text
                    text: ' filters'
          -
            type: listItem
            content:
              -
                type: paragraph
                content:
                  -
                    type: text
                    text: 'A '
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: Sort
                  -
                    type: text
                    text: ' component that allows users to reorder the entries'
    type: text
    enabled: true
  -
    id: mbe892k3
    code:
      code: |-
        <div class="my-8 xl:my-12" id="livewire-collection">
            <div class="grid grid-cols-12 gap-8 lg:gap-12 xl:gap-16 mb-4 xl:mb-8">
                <div class="col-span-10">
                    <div class="grid grid-cols-4 items-center gap-3 lg:gap-5">
                        <div>
                            {{ livewire:lf-checkbox-filter
                                blueprint="cars.car"
                                field="car_brand"
                                condition="taxonomy"
                                view="lf-checkbox-advanced"
                                searchable="true"
                                placeholder="Car brand"
                            }}
                        </div>
                        <div>
                            {{ livewire:lf-checkbox-filter
                                blueprint="cars.car"
                                field="special_categories"
                                condition="query_scope"
                                modifier="multiselect"
                                view="lf-checkbox-advanced"
                                searchable="true"
                                placeholder="Special categories"
                            }}
                        </div>
                        <div>
                            {{ livewire:lf-select-filter
                                blueprint="cars.car"
                                field="transmission"
                                condition="is"
                                view="lf-select-advanced"
                                placeholder="Transmission"
                            }}
                        </div>
                        <div>
                            {{ livewire:lf-select-filter
                                blueprint="cars.car"
                                field="fuel_type"
                                condition="is"
                                view="lf-select-advanced"
                                placeholder="Fuel type"
                            }}
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    {{ livewire:lf-sort
                        blueprint="cars.car"
                        fields="seats|doors"
                    }}
                </div>
            </div>
        	<div>
        	  {{ livewire-collection:cars paginate="12" scrollTo="#livewire-collection" }}
        	</div>
        </div>
      mode: htmlmixed
    language: antlers
    type: code
    enabled: true
---
