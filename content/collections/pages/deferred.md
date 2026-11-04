---
id: 7d3f0e52-2b8c-4a51-9f6e-defe44edf117
blueprint: page
title: 'Deferred (mobile)'
template: examples/deferred
builder:
  -
    id: dfr7Kq2mXo1pLs9TzQwE4
    text:
      -
        type: paragraph
        content:
          - type: text
            text: 'This demo adds '
          -
            type: text
            marks:
              - type: bold
            text: 'defer_filters="drawer"'
          - type: text
            text: ' to the collection tag. On desktop the filters sit in a sidebar and apply live. On mobile they move into a drawer: changes there are queued and the results, tags and URL update once you press Apply, while closing the drawer without applying discards them. The drawer, its sidebar layout and the Apply button come from the {{ livewire-filters:drawer }} tag.'
    type: text
    enabled: true
---
