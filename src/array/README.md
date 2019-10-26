# array

## flatten()

```php
<?php

function flatten(array $xs)
{
    return iterator_to_array(new \RecursiveIteratorIterator(new \RecursiveArrayIterator($xs)), 0);
}
```
