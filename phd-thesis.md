---
layout: plain
---

# PhD thesis overview

{: .updated style="text-align:left"}
Updated {{ site.time | date: "%d %B %Y" }}

## The author

<img src="{{ site.baseurl }}/images/photo.jpg" alt="Profile photo" class="frame" style="float:left; height: 200px; margin:0px 10px 0px 0px" />

**John J. Camilleri**  
PhD Student  
Department of Computer Science and Engineering  
Chalmers University of Technology and University of Gothenburg  
Sweden

Email: <john.j.camilleri@cse.gu.se>  
Home page: <http://www.cse.chalmers.se/~cajohn/>

<div style="clear:both"></div>

## Preliminary title

{: style="color:inherit"}
### _Contracts and Computation — Formal modelling and analysis for normative natural language_

## Abstract

Whether we're aware of it or not, our digital lives are governed by normative documents of various kinds, including privacy policies, software licenses, service agreements, and other regulations. Documents like these essentially describe the permissions, obligations, and prohibitions of two or more parties, including the penalties which must be payed when someone breaks the rules. These documents are often lengthy and hard to understand, and many people often agree to these legally-binding contracts without even reading them.

We are interested in taking a computational approach to the analysis of normative texts — how they can be modelled formally, and what kinds of processing can be automatically performed on them. The ultimate goal is to produce end-user tools which can take a natural language document as input and allow a user to easily ask questions about the implications of that contract, getting a meaningful answer in natural language within a reasonable amount of time.

This thesis includes six research papers by the author which describe the various components that a system such as this requires: entity recognition and modality extraction on natural language texts, controlled natural languages and visual diagrams as interfaces for modelling, logical formalisms which can be used for contract representation, and the kinds of evaluation and analysis that these methods allow. These pieces are then put together into a prototype tool for end-users, allowing for end-to-end analysis of normative texts in natural language.

## Outline of introduction

1. **Normative texts** — Describes the class of documents we are interested in.
2. **Motivation** — Outlines the problem that users agree to contracts without reading or understanding them. Highlights the need for automatic analysis of normative documents, and discusses the different kinds of analysis tasks imaginable.
3. **Approach** — An overview of our approach to contract analysis, introducing each technology and method used in the thesis.
    - **Modelling** — Controlled natural languages, graphical visualisation of contract models, and using a tabular interface in conjunction with automatic extraction for building models.
    - **Formalisms** — Contract Logic CL, Contract-Oriented Diagrams, and Simplified Contract Language SCL
    - **Analysis** — Syntactic querying, trace evaluation, random testing, deontic conflict analysis, and model checking via translation into timed automata.
4. **Contributions** — A list of the publications included in the thesis, each with a summary and a description of my own contributions.
5. **Related work** — Other works related to the overall goals of the thesis, which are not already mentioned in any of the related works sections of the papers included in the thesis.

## Papers included

{: type="I"}
1. **Modelling and Analysis of Normative Documents**, John J. Camilleri, Gerardo Schneider. Vol. 87, _Journal of Logical and Algebraic Methods in Programming_. 2017. DOI: 10.1016/j.jlamp.2017.05.002.
[[Link](http://dx.doi.org/10.1016/j.jlamp.2017.05.002)]
[[PDF](http://academic.johnjcamilleri.com/papers/jlamp2017.pdf)]

2. **A Domain-Specific Language for Normative Texts with Timing Constraints**, Runa Gulliksson, John J. Camilleri. In _23rd International Symposium on Temporal Representation and Reasoning (TIME 2016)_. DOI: 10.1109/TIME.2016.14. 2016.
[[Link](http://dx.doi.org/10.1109/TIME.2016.14)]
[[PDF](http://academic.johnjcamilleri.com/papers/time2016.pdf)]

3. **A Framework for Conflict Analysis of Normative Texts Written in Controlled Natural Language**, Krasimir Angelov, John J. Camilleri, Gerardo Schneider. Vol. 82, _Journal of Logic and Algebraic Programming_. DOI: 10.1016/j.jlap.2013.03.002. 2013.
[[Link](http://dx.doi.org/10.1016/j.jlap.2013.03.002)]
[[PDF](http://academic.johnjcamilleri.com/papers/jlap2013.pdf)]

4. **A CNL for Contract-Oriented Diagrams**, John J. Camilleri, Gabriele Paganelli, Gerardo Schneider. In _Proceedings of the 4th International Workshop on Controlled Natural Language (CNL 2014)_. Vol. 8625, Lecture Notes in Computer Science. DOI: 10.1007/978-3-319-10223-8_13. 2014.
[[Link](http://dx.doi.org/10.1007/978-3-319-10223-8_13)]
[[PDF](http://academic.johnjcamilleri.com/papers/cnl2014.pdf)]

5. **Extracting Formal Models from Normative Texts**, John J. Camilleri, Normunds Grūzītis, Gerardo Schneider. In _21st International Conference on Applications of Natural Language to Information Systems (NLDB 2016)_. Vol. 9612, Lecture Notes in Computer Science. DOI: 10.1007/978-3-319-41754-7_40. 2016.
[[Link](http://dx.doi.org/10.1007/978-3-319-41754-7_40)]
[[PDF](http://academic.johnjcamilleri.com/papers/nldb2016.pdf)]
[[PDF Extended](http://academic.johnjcamilleri.com/papers/nldb2016extended.pdf)]

6. **A Web-Based Tool for Analysing Normative Documents in English**, John J. Camilleri, Mohammad Reza Haghshenas, Gerardo Schneider. (Under submission). 2017.
[[PDF](http://academic.johnjcamilleri.com/papers/ifm2017.pdf)]

## Contributions of each paper


{: type="I"}
1. Focuses on the language of _Contract-Oriented (C-O) diagrams_ and the kinds of analysis possible on these models.
The paper covers some modifications to the original formalism, the definition of a novel trace semantics,
and a complete working implementation of the translation from _C-O Diagrams_ into Network of Timed Automata (NTA).
A small case study is also included, which demonstrates our methods for syntactic and semantic analysis of contract models.
2. Introduces the _Simplified Contract Language_ SCL,
a domain-specific language for normative modelling which is inspired by _C-O Diagrams_ but with a focus on compositionality.
The language has a clearly defined operational semantics based on discrete time steps,
and a highly modular translation to NTA,
both of which were tested extensively using random test cases.
3. Introduces the idea of using a CNL as an interface to a formal contract language.
By designing and implementing a CNL for the contract logic _CL_, and joining this together with the accompanying conflict analysis tool CLAN,
we produce a basic tool for writing contracts in CNL and checking them for conflicts.
4. Presents a CNL for contracts modelled using the more expressive _C-O Diagram_ formalism,
which includes the ability to express timing constraints on clauses and comes with its own visual representation.
Apart from the design of the CNL itself, the paper also covers working implementations of a CNL editor,
a visual editor for working with the diagrams, and a common interchange format between them.
5. Investigates the use of NLP methods for parsing normative texts and building partial models in the _C-O Diagram_ formalism.
The idea behind this tool is to provide a first-pass processing phase which could automatically extract some information from a contract and reduce some of manual work required in modelling.
6. Presents a web-based tool which ties together components developed in previous papers (I, IV & V) into a single interface.
This prototype tool is aimed at end-users, providing end-to-end analysis of normative texts in natural language.

## Personal contributions to each paper

{: type="I"}
1. The changes to the formalism, the definition of the trace semantics, the entire implementation of the translation back-end, and the work on the case study.
2. The design of the language and its semantics, as well as the overall approach towards the translation into NTA.
3. Implementing the AnaCon tool, which uses a GF grammar to parse CNL contracts into expressions in CL, passes these expressions into the CLAN tool, and renders any potential counter-examples back into CNL using the same grammar.
I also worked on applying to the tool to the two case studies described in the article.
4. The complete design of the CNL, along with the web-based CNL editing tool and back-end conversion tools.
5. Consulting on the system's heuristic rules, the design of the experiments, and carrying out the evaluation.
6. The design of the workflow and system architecture, as well as the implementation of the back-end server.

## Manuscript

A current draft of the thesis manuscript can be obtained [here](http://www.cse.chalmers.se/~cajohn/phd-thesis-draft.pdf).
