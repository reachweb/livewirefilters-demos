---
id: 7d0c5b8e-3f4a-4e21-9b6d-dep3nd3ntf1l
blueprint: page
title: Dependent
template: examples/dependent
builder:
  -
    id: dep1text01
    text:
      -
        type: paragraph
        content:
          -
            type: text
            text: 'The '
          -
            type: text
            marks:
              -
                type: bold
            text: 'Car model'
          -
            type: text
            text: ' filter depends on the '
          -
            type: text
            marks:
              -
                type: bold
            text: 'Car brand'
          -
            type: text
            text: ' filter. Pick a brand and only that brand''s models stay in the list; a model that the new brand doesn''t have is unchecked. With no brand selected, every model is shown.'
    type: text
    enabled: true
  -
    id: dep1code01
    code:
      code: |-
        {{ livewire:lf-checkbox-filter
            blueprint="cars.car"
            field="car_brand"
            condition="taxonomy"
        }}

        {{ livewire:lf-checkbox-filter
            blueprint="cars.car"
            field="car_model"
            condition="in"
            depends_on="car_brand"
        }}
      mode: htmlmixed
    language: antlers
    type: code
    enabled: true
---
