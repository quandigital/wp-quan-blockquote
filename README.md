# wp-quan-blockquote

## Usage

```
[quote source="URL" name="NAME"]QUOTED TEXT[/quote]
```

The quote shortcode takes two optional arguments `source` and `name`. 

## Example

```
[quote source="http://www.webology.org/2010/v7n2/a80.html" name="Webology, Volume 7, Number 2, December, 2010"]1. Men use scientific databases more often than women in cases where it was not necessary
2. Women tend to use more <a href="http://www.quandigital.com/erweiterte-suchoperatoren-zum-an-die-wand-hangen/">operators</a> while formulating a search query
3. Sometimes, men tend to find search results accidently; women search more targeted
4. Women are more satisfied with the search results, regardless of using search engines or scientific information services[/quote]
```

Which outputs:

```
<blockquote class="quan-blockquote">
    <p>
        1. Men use scientific databases more often than women in cases where it was not necessary
        2. Women tend to use more <a href="http://www.quandigital.com/erweiterte-suchoperatoren-zum-an-die-wand-hangen/">operators</a> while formulating a search query
        3. Sometimes, men tend to find search results accidently; women search more targeted
        4. Women are more satisfied with the search results, regardless of using search engines or scientific information services
    </p>
    <footer>
        <cite>
            <a href="http://www.webology.org/2010/v7n2/a80.html" target="_blank">Webology, Volume 7, Number 2, December, 2010</a>
        </cite>
    <footer>
</blockquote>
```
