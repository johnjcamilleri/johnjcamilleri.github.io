---
layout: default
---

{: .updated}
Updated {{ site.time | date: "%d %B %Y" }}

I'm a Ph.D. student at the department of
[Computer Science and Engineering](http://www.chalmers.se/en/departments/cse/) at
[Chalmers University of Technology](http://www.chalmers.se/en/) and the
[University of Gothenburg](http://www.gu.se/english/), Sweden.
I work in the areas of language technology and formal methods, where I'm funded by the
[REMU project](http://remu.grammaticalframework.org/) to research the formal analysis of normative contracts written in natural language.

I also do some computational linguistic work for the Maltese language,
where I help build and maintain a [digital lexicon for Maltese](http://mlrs.research.um.edu.mt/resources/gabra/) called _Ġabra_.

You can contact me at
<code>john.j.camilleri<img src="{{ site.baseurl }}/images/ghost.png" style="height:18px; vertical-align:sub; -webkit-filter:grayscale(100%); filter:grayscale(100%);" alt="@"/>cse.gu.se</code>
or find me in room 5446 of the EDIT building on Chalmers’ Johanneberg campus in Gothenburg, Sweden.

## Brief background

- **2013 – present**: Ph.D. student in Computer Science at Chalmers / University of Gothenburg, under the supervision of [Gerardo Schneider](http://www.cse.chalmers.se/~gersch/) and [Koen Claessen](http://www.cse.chalmers.se/~koen/).
- **2012 – 2013**: M.Sc. student at Chalmers University of Technology in the program [Computer Science: Algorithms, Languages and Logic](http://www.chalmers.se/en/education/programmes/masters-info/Pages/Computer-Science-algorithms-languages-and-logic.aspx). [Aarne Ranta](http://www.cse.chalmers.se/~aarne/) was my thesis supervisor.
- **2011 – 2013**: Research assistant at Chalmers / University of Gothenburg in the [MOLTO project](http://www.molto-project.eu/).
- **2006 – 2010**: B.Sc. IT (Hons) in Computer Science and Artificial Intelligence at the [University of Malta](http://www.um.edu.mt/ict/).

## Teaching

I have been/am/will be involved in the following courses as a teaching assistant:

{% for item in site.data.teaching %}
- {{ item.course
    }}: {% for i in item.instances
      %}{% if i.url
        %}[{% if i.current %}**{{i.period}}**{% else %}{{i.period}}{% endif %}]({{ i.url }}){%
          else
        %}{{ i.period }}{%
          endif
        %}{%
      unless forloop.last %}, {% endunless
      %}{%
    endfor %}{%
  endfor %}

## Student supervision

- Runa Gulliksson (Computer Science, HT2015–VT2016)
- Mohammad Reza Haghshenas (Software Engineering, VT2016)
- Sophie Chesney (Language Technology, VT2016)

Here are some [master's thesis project proposals](https://masterthesis.cms.chalmers.se/supervisor/john-j-camilleri)
which are related to my research.

## Other

- Member of sub-committee on ICT of the [National Council for the Maltese Language](http://www.kunsilltalmalti.gov.mt/eng), 2013 – present.
- Member of EACL 2017 student board

## Publications

<ul class="publications">
{% for item in site.data.publications reversed %}
  {% if item.show == false %}{% continue %}{% endif %}
  <li>
  <em>{{ item.title }}</em>,
  {{ item.authors | join: ', ' }}.
  {% if item.publication %}
    {% if item.publication.booktitle %}
    In {{ item.publication.booktitle }}.
    {% endif %}
    {% if item.publication.volume %}
    Vol. {{ item.publication.volume }},
    {% endif %}
    {% if item.publication.series %}
    {{ item.publication.series }}.
    {% endif %}
    {% if item.publication.journal %}
    {{ item.publication.journal }}.
    {% endif %}
  {% elsif item.event %}
    {{ item.event.name }} ({{ item.event.code }}).
  {% endif %}

  {% if item.school %}
    {{ item.school }}.
  {% endif %}

  {% if item.address %}
    {{ item.address }}.
  {% endif %}

  {% if item.note %}
    {{ item.note }}.
  {% endif %}

  ({{ item.year }}).

  {% if item.url %}[<a href="{{ item.url }}">PDF</a>]
  {% elsif item.key %}[<a href="http://academic.johnjcamilleri.com/papers/{{ item.key }}.pdf">PDF</a>]
  {% endif %}

  </li>
{% endfor %}
</ul>

## Presentations

<ul class="presentations">
{% for item in site.data.presentations reversed %}
  {% if item.show == false %}{% continue %}{% endif %}
  <li>
  <em>{{ item.title }}</em>:
  {{ item.description }}.

  {% if item.event %}{{ item.event }}, {% endif %}
  {% if item.school %}{{ item.school }}, {% endif %}
  {{ item.location }},
  {{ item.year }}.

  [<a href="http://academic.johnjcamilleri.com/presentations/{{ item.filename }}">Slides</a>]
  </li>
{% endfor %}
</ul>


## Researcher profiles

This page will always contain the most up-to-date information;
these links are mostly for myself.

{: .compact}
{% for item in site.data.profiles %}
- [{{ item.name }}]({{ item.url }}){%
endfor %}
