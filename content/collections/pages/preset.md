---
id: 81c7019c-1933-41ca-b53d-f60316a5eeee
blueprint: page
title: Preset
updated_by: 935d2204-f6fd-4b26-ac58-6c66c4675ef1
updated_at: 1749677322
template: examples/preset
builder:
  -
    id: mbsgkw37
    text:
      -
        type: paragraph
        content:
          -
            type: text
            text: 'In this example, we’ve preset values on the '
          -
            type: text
            marks:
              -
                type: bold
            text: '<livewire-collection>'
          -
            type: text
            text: ' tag — specifically for the '
          -
            type: text
            marks:
              -
                type: italic
            text: car_brand
          -
            type: text
            text: ' taxonomy and a default sort option. This lets you see how the filters behave when values are already set.'
      -
        type: paragraph
        content:
          -
            type: text
            text: 'We also added an '
          -
            type: text
            marks:
              -
                type: bold
            text: LfDateFilter
          -
            type: text
            text: ' to let users filter results by car registration date.'
    type: text
    enabled: true
  -
    id: mbsgml6a
    code:
      code: |-
        <div class="my-8 xl:my-12" id="livewire-collection">
            <div class="grid grid-cols-12 mb-8">
                <div class="col-span-2 col-start-11">
                    {{ livewire:lf-sort
                        blueprint="cars.car"
                        fields="seats|doors"
                    }}
                </div>
            </div>
            <div class="grid grid-cols-12 gap-8 lg:gap-12 xl:gap-16">
                <div class="col-span-3">
                    <div class="mb-8">
                        <div class="mb-2 font-bold">
                            Date of registration is after
                        </div>
                        {{ livewire:lf-date-filter
                            blueprint="cars.car"
                            field="date_of_registration"
                            condition="is_after"
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
                </div>
                <div class="col-span-9">
                    <div class="mb-4">
                        {{ livewire:lf-tags blueprint="cars.car" fields="date_of_registration|car_brand|special_categories|transmission|fuel_type" }}
                    </div>
                    <div class="@container">
                        <div>
                            {{ livewire-collection:cars 
                                paginate="6"
                                taxonomy:car_brand:any="toyota|hyundai|vw"
                                sort="seats:desc"
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
---
