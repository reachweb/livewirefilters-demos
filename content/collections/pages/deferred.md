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
            text: 'defer_filters="true"'
          - type: text
            text: ' to the collection tag. Changing a filter inside the drawer only queues the change: the results, tags and URL update once you press Apply. Closing the drawer without applying discards the queued changes. The drawer and its Apply button come from the {{ livewire-filters:drawer }} tag.'
    type: text
    enabled: true
---
