#Normal Flow (Block vs. Inline)
Elements (technically just block-level elements) on a webpage try to move as far up and as far left as possible. In addition, child elements appear inside of their parents. These two facts are what's known as "normal flow". If you want to make an interesting layout in CSS, you'll need to break out of normal flow by using some CSS positioning properties.

##Block-Level vs. Inline
Web browsers display elements in one of two ways: block-level or inline. Block-level elements are given their own vertical space on the page. That is, a line break is automatically placed above and below a block-level element. Inline elements, on the other hand, display inline with whatever content surrounds them, such as the text of a paragraph. The only time inline elements are given their own line on a page is when they are immediately preceded and followed by block-level elements. 

Examples of inline elements include `span`, `img`, `em`, `strong`, and `a`.

Examples of block-level elements include `p`, `div`, `h2`, `li`, `ul`, `hr`.