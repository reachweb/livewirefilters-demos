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
            marks:
              -
                type: bold
            text: 'Car model'
          -
            type: text
            text: ' only lists the models of the brands you pick, and '
          -
            type: text
            marks:
              -
                type: bold
            text: 'Fuel type'
          -
            type: text
            text: ' follows both. When a new brand removes a choice, a notice tells you.'
    type: text
    enabled: true
  -
    id: dep1code01
    code:
      code: |-
        {{# Needs 'enable_dependent_filters' => true in config/statamic-livewire-filters.php #}}

        {{ livewire:lf-checkbox-filter
            blueprint="cars.car"
            field="car_brand"
            condition="taxonomy"
            view="lf-checkbox-advanced"
        }}

        {{ livewire:lf-checkbox-filter
            blueprint="cars.car"
            field="car_model"
            condition="in"
            depends_on="car_brand"
            view="lf-checkbox-advanced"
            searchable="true"
        }}

        {{ livewire:lf-select-filter
            blueprint="cars.car"
            field="fuel_type"
            condition="is"
            depends_on="car_brand|car_model"
            view="lf-select-advanced"
        }}

        {{# Tell the visitor what a new brand removed #}}
        <div
            x-data="{ cleared: [], timer: null }"
            x-on:dependent-selection-cleared.window="
                cleared.push(...$event.detail.labels);
                clearTimeout(timer);
                timer = setTimeout(() => cleared = [], 6000);
            "
            x-show="cleared.length > 0"
            x-cloak
        >
            Removed <strong x-text="cleared.join(', ')"></strong>: not available for your new selection.
        </div>
      mode: htmlmixed
    language: antlers
    type: code
    enabled: true
---
