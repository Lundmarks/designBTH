---
views:
    main:
        template: anax/v2/article/default
        data:
            class: blog

    byline: false
    block-about: false
    article-toc: false

    blog-list:
        region: main
        template: anax/v2/blog-list/default
        sort: 2
        data:
            dateFormat: j F Y
            meta:
                type: toc
                orderby: publishTime
                orderorder: desc

    blog-toc:
        region: sidebar-right
        template: anax/v2/blog-toc/default
        sort: 2
        data:
            meta:
                type: copy
                view: blog-list

---
Dagens Bild
===========================

Under denna blogg driver jag ett projekt jag kallar för Dagens Bild. En bild per dag, där jag skriver några rader om varför just den bilden betyder någonting extra för dig den dagen.

Disclaimer: Bilderna är dock inte tagna av mig - oavsett vad som skrivs i inläggen
