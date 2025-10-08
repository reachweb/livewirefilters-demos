---
id: 9f25ca63-c51a-4a88-9754-2d18e6e61cf2
blueprint: page
title: Advanced
updated_by: 935d2204-f6fd-4b26-ac58-6c66c4675ef1
updated_at: 1759745916
builder:
  -
    id: mbe8f1pm
    text:
      -
        type: paragraph
        content:
          -
            type: text
            text: 'In this more advanced example, you can see the flexibility of the addon by rearranging some components and introducing additional ones:'
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
                    text: 'An '
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: LfToggleFilter
                  -
                    type: text
                    text: ' to only show cars registered in 2025.'
          -
            type: listItem
            content:
              -
                type: paragraph
                content:
                  -
                    type: text
                    text: 'We keep the LfCheckboxFilter with the advanced view for the '
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Car Brand'
                  -
                    type: text
                    text: ' taxonomy field'
          -
            type: listItem
            content:
              -
                type: paragraph
                content:
                  -
                    type: text
                    text: 'We use another LfCheckboxFilter with the multiselect query scope to filter the '
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Special Categories'
                  -
                    type: text
                    text: ' checkbox field'
          -
            type: listItem
            content:
              -
                type: paragraph
                content:
                  -
                    type: text
                    text: 'We swap the LfRadioFilter for the '
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: Transmission
                  -
                    type: text
                    text: ' field with an LfSelectFilter'
          -
            type: listItem
            content:
              -
                type: paragraph
                content:
                  -
                    type: text
                    text: 'We also add another LfSelectFilter for the '
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Fuel Type'
                  -
                    type: text
                    text: ' select field'
          -
            type: listItem
            content:
              -
                type: paragraph
                content:
                  -
                    type: text
                    text: 'An LfRadioFilter for the '
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Air Condition'
                  -
                    type: text
                    text: ' radio field'
          -
            type: listItem
            content:
              -
                type: paragraph
                content:
                  -
                    type: text
                    text: 'An LfRangeFilter to filter by '
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Minimum Seats'
          -
            type: listItem
            content:
              -
                type: paragraph
                content:
                  -
                    type: text
                    text: 'An LfDualRange slider to select any range of '
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Model Year'
          -
            type: listItem
            content:
              -
                type: paragraph
                content:
                  -
                    type: text
                    text: 'An LfCount component to display the number of cars found for each search'
          -
            type: listItem
            content:
              -
                type: paragraph
                content:
                  -
                    type: text
                    text: 'And an LfSort component to sort the cars by '
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: Seats
                  -
                    type: text
                    text: ' or '
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: Doors
    type: text
    enabled: true
  -
    id: mbesg3sc
    code:
      code: |-
        <div id="livewire-collection">
            <div class="grid grid-cols-12 gap-8 lg:gap-12 xl:gap-16">
                <div class="col-span-3">
                    <div class="mb-8">
                        {{ livewire:lf-toggle-filter
                            blueprint="cars.car"
                            field="date_of_registration"
                            condition="gte"
                            preset_value="2025-01-01"
                            label="Only new vehicles"
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
                            view="lf-checkbox-advanced"
                            searchable="true"
                        }}
                    </div>
                    <div class="mb-8">
                        <div class="mb-2 font-bold">
                            Special category
                        </div>
                        {{ livewire:lf-checkbox-filter
                            blueprint="cars.car"
                            field="special_categories"
                            condition="query_scope"
                            modifier="multiselect"
                        }}
                    </div>
                    <div class="mb-8">
                        <div class="mb-2 font-bold">
                            Transmission
                        </div>
                        {{ livewire:lf-select-filter
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
                    <div class="mb-8">
                        <div class="mb-2 font-bold">
                            A/C type
                        </div>
                        {{ livewire:lf-radio-filter
                            blueprint="cars.car"
                            field="air_condition"
                            condition="is"
                        }}
                    </div>
                    <div class="mb-8">
                        <div class="mb-2 font-bold">
                            Model year
                        </div>
                        {{ livewire:lf-dual-range-filter
                            blueprint="cars.car"
                            field="date_of_registration"
                            min="2019"
                            max="2025"
                        }}
                    </div>
                    <div class="mb-8">
                        <div class="mb-2 font-bold">
                            Seats (at least)
                        </div>
                        {{ livewire:lf-range-filter
                            blueprint="cars.car"
                            field="seats"
                            condition="gte"
                            min="2"
                            max="9"
                            default="2"
                        }}
                    </div>
                </div>
                <div class="col-span-9">
                    <div class="mb-4">
                        {{ livewire:lf-count }}
                    </div>
                    <div class="@container">
                        <div>
                            {{ livewire-collection:cars paginate="9" scrollTo="#livewire-collection" }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
      mode: htmlmixed
    language: antlers
    type: code
    enabled: true
template: examples/advanced
---
