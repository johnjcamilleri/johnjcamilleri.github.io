---
layout: plain
title: PhD thesis — John J. Camilleri
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

## Thesis title

{: style="color:inherit"}
### _Contracts and Computation — Formal modelling and analysis for normative natural language_

## Abstract

Whether we are aware of it or not,
our digital lives are governed by contracts of various kinds, such as
privacy policies,
software licenses,
service agreements,
and regulations.
At their essence, normative documents like these dictate the permissions, obligations, and prohibitions
of two or more parties entering into an agreement,
including the penalties which must be paid when someone breaks the rules.
Such documents are often lengthy and hard to understand,
and most people tend to agree to these legally binding contracts without ever reading them.

Our goal is to create tools which can take a natural language document as input
and allow an end user to easily ask questions about its implications,
getting back meaningful answers in natural language within a reasonable amount of time.
We do this by bringing formal methods to the analysis of normative texts,
investigating how they can be effectively modelled and the kinds of automatic processing that these models enable.

This thesis includes six research papers by the author which cover the various aspects of this approach:
entity recognition and modality extraction from natural language,
controlled natural languages and visual diagrams as interfaces for modelling,
logical formalisms which can be used for contract representation,
and analysis via syntactic filtering, trace evaluation, random testing, and model checking.
These components are then combined into a prototype tool for end users, allowing for end-to-end analysis of normative texts in natural language.



## Structure of the thesis

The thesis consists of an introduction followed by six individual research papers.
The papers have only been edited for formatting purposes, and in general appear in their original form.
Thus, it is normal that there is some overlap in the background content of each paper.
Note also that the papers are grouped by topic, and do not appear in chronological order.

## Outline of introduction

1. **Motivation** — Describes the class of documents we are interested in, and outlines the problem that users agree to contracts without reading or understanding them. Highlights the need for automatic analysis of normative documents, and discusses the different kinds of analysis tasks imaginable.
2. **Approach** — An overview of our approach to contract analysis, introducing each technology and method used in the thesis.
    - **Modelling** — Controlled natural languages, graphical visualisation of contract models, and using a tabular interface in conjunction with automatic extraction for building models.
    - **Formalisms** — Contract Logic CL, Contract-Oriented Diagrams, and Simplified Contract Language SCL
    - **Analysis** — Syntactic querying, trace evaluation, random testing, deontic conflict analysis, and model checking via translation into timed automata.
3. **Contributions** — A list of the publications included in the thesis, each with a summary and a description of my own contributions.
4. **Related work** — Other works related to the overall goals of the thesis, which are not already mentioned in any of the related works sections of the papers included in the thesis.

## Papers included

{: type="I"}
1. **Modelling and Analysis of Normative Documents**,
John J. Camilleri, Gerardo Schneider.
Vol. 91, _Journal of Logical and Algebraic Methods in Programming_. 2017.
DOI: [10.1016/j.jlamp.2017.05.002](http://dx.doi.org/10.1016/j.jlamp.2017.05.002)
[[PDF](http://academic.johnjcamilleri.com/papers/jlamp2017.pdf)]

2. **A Domain-Specific Language for Normative Texts with Timing Constraints**,
Runa Gulliksson, John J. Camilleri.
In _23rd International Symposium on Temporal Representation and Reasoning (TIME 2016)_. 2016.
DOI: [10.1109/TIME.2016.14](http://dx.doi.org/10.1109/TIME.2016.14)
[[PDF](http://academic.johnjcamilleri.com/papers/time2016.pdf)]

3. **A Framework for Conflict Analysis of Normative Texts Written in Controlled Natural Language**,
Krasimir Angelov, John J. Camilleri, Gerardo Schneider.
Vol. 82, _Journal of Logic and Algebraic Programming_. 2013.
DOI: [10.1016/j.jlap.2013.03.002](http://dx.doi.org/10.1016/j.jlap.2013.03.002)
[[PDF](http://academic.johnjcamilleri.com/papers/jlap2013.pdf)]

4. **A CNL for Contract-Oriented Diagrams**,
John J. Camilleri, Gabriele Paganelli, Gerardo Schneider.
In _4th International Workshop on Controlled Natural Language (CNL 2014)_.
Vol. 8625, Lecture Notes in Computer Science. 2014.
DOI: [10.1007/978-3-319-10223-8_13](http://dx.doi.org/10.1007/978-3-319-10223-8_13)
[[PDF](http://academic.johnjcamilleri.com/papers/cnl2014.pdf)]

5. **Extracting Formal Models from Normative Texts**,
John J. Camilleri, Normunds Grūzītis, Gerardo Schneider.
In _21st International Conference on Applications of Natural Language to Information Systems (NLDB 2016)_.
Vol. 9612, Lecture Notes in Computer Science. 2016.
DOI: [10.1007/978-3-319-41754-7_40](http://dx.doi.org/10.1007/978-3-319-41754-7_40)
[[PDF](http://academic.johnjcamilleri.com/papers/nldb2016.pdf)]
[[PDF Extended](http://academic.johnjcamilleri.com/papers/nldb2016extended.pdf)]

6. **A Web-Based Tool for Analysing Normative Documents in English**,
John J. Camilleri, Mohammad Reza Haghshenas, Gerardo Schneider.
2017.
arXiv: [1707.03997 [cs.CL]](https://arxiv.org/abs/1707.03997)
[[PDF](http://academic.johnjcamilleri.com/papers/ifm2017.pdf)]

## Summary of each paper

{: type="I"}
1. This paper focuses on _C-O Diagrams_ and the kinds of analysis possible on these models.
Its novel contributions include
extensions to the original formalism,
the definition of a trace semantics,
and an updated translation function from _C-O Diagrams_ into NTA, complete with a fully-working implementation in Haskell.
A small case study from a real-world contract is also included, demonstrating our methods for syntactic and semantic analysis of contract models.
2. This paper introduces the _Simplified Contract Language (SCL)_,
a domain-specific language for modelling contracts,
inspired by _C-O Diagrams_ but with a strong focus on compositionality.
The language has a clearly defined operational semantics based on discrete time steps,
and a highly modular translation to NTA,
both of which are tested extensively using random test cases.
The paper includes a case study showing how _SCL_ can be used for the modelling, testing, simulation and verification of normative texts.
3. This paper presents a CNL for the formal contract language _CL_, implemented as a GF grammar,
together with a basic tool for joining this CNL together with the conflict analysis tool CLAN.
The novel contribution of this work is thus a simple framework for writing contracts in CNL and checking them automatically for conflicts, where any potential counter-examples are rendered back into CNL using the same grammar.
The paper provides two case studies, demonstrating the iterative contract-modelling process using feedback from the conflict analyser.
4. This paper presents another GF-based CNL for contracts, this time for the more expressive _C-O Diagram_ formalism,
which includes the ability to express timing constraints on clauses and comes with its own visual representation.
Apart from the CNL itself, the contributions of this paper also include
a web-based CNL editor with auto-completion and other helpful features,
another web-based editor for visually manipulating _C-O Diagrams_,
and a common interchange format between these representations.
5. This paper addresses the front-end task of contract modelling,
using NLP methods to parse normative texts in English and build partial models of them in the _C-O Diagram_ formalism.
The idea is to provide a first-pass processing phase which could automatically extract some information from a contract and reduce some of manual work required by modelling.
The main contribution is a tool which, using the Stanford parser,
extracts information from dependency trees using custom rules and heuristics,
and outputs it in a custom tabular format for post-editing, before conversion into a final model.
The paper includes a basic evaluation of this method, in terms of precision and recall over a small set of test sentences.
6. This paper ties together the tools developed in previous papers (I, IV, V)
into a single a web application, with the aim of bringing end-to-end analysis of normative texts in English to the end user.
This is achieved by wrapping each individual tool as a web service with a corresponding API,
and building a client-side web application which consumes these services.
The novel contribution of this work is thus the web application itself, covering both the user interface and the supporting server architecture.
The paper also includes a case study demonstrating the contract analysis workflow,
starting from natural language and going all the way to verification of semantic queries.

## Personal contributions to each paper

{: type="I"}
1. The changes to the formalism,
the definition of the trace semantics,
the entire implementation of the translation back-end,
and the work on the case study.
2. The design of the language and its semantics,
implementation as an embedded DSL in Haskell,
the overall method of the translation into NTA,
and all work on random testing using QuickCheck.
3. The implementation of the _AnaCon_ tool,
consultation on the design of the CNL,
and all work related to the case studies.
4. The complete design of the CNL and its implementation in GF,
the building of the web-based CNL editing tool using standard web technologies,
and all back-end conversion tools in Haskell.
5. Consultation on the system's heuristic rules,
the design of the experiments,
and carrying out the evaluation.
6. The design of the user workflow and overall system architecture,
as well as the implementation of the back-end server in Haskell.


## Publication information

The thesis is officially published online in the [Gothenburg University Publications Electronic Archive (GUPEA)](http://hdl.handle.net/2077/53815).
