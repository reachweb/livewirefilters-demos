---
id: e6364d9f-87ba-48b1-912e-6dbce0c823f8
blueprint: page
title: Basic
updated_by: 935d2204-f6fd-4b26-ac58-6c66c4675ef1
updated_at: 1748850648
template: examples/basic
builder:
  -
    id: mbe0l83y
    text:
      -
        type: paragraph
        content:
          -
            type: text
            text: 'This is the most basic example of what you can achieve with '
          -
            type: text
            marks:
              -
                type: bold
            text: 'Livewire Filters'
          -
            type: text
            text: ' in just a few minutes. Here, we are filtering a collection using four components:'
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
                    text: 'An LfTextFilter to filter by the '
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: Title
                  -
                    type: text
                    text: ' text field'
          -
            type: listItem
            content:
              -
                type: paragraph
                content:
                  -
                    type: text
                    text: 'An LfCheckboxFilter for the '
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
                    text: 'An LfRadioFilter for the '
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: Transmission
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
                    text: 'And an LfSelectFilter for the '
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
        type: paragraph
        content:
          -
            type: text
            text: 'It also uses the '
          -
            type: text
            marks:
              -
                type: bold
            text: Tag
          -
            type: text
            text: ' component and the default pagination component.'
    type: text
    enabled: true
  -
    id: mbe13h88
    code:
      code: |-
        <div class="my-8 xl:my-12" id="livewire-collection">
            <div class="grid grid-cols-12 gap-8 lg:gap-12 xl:gap-16">
                <div class="col-span-3">
                    <div class="mb-8">
                        <div class="mb-2 font-bold">
                            Search by name
                        </div>
                        {{ livewire:lf-text-filter
                            blueprint="cars.car"
                            field="title"
                            condition="contains"
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
                <div class="col-span-9">
                    <div class="mb-4">
                        {{ livewire:lf-tags blueprint="cars.car" fields="title|car_brand|transmission|fuel_type" }}
                    </div>
                    <div>
                        {{ livewire-collection:cars paginate="9" scrollTo="#livewire-collection" }}
                    </div>
                </div>
            </div>
        </div>
      mode: htmlmixed
    language: antlers
    type: code
    enabled: true
---
