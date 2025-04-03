-
- bio
  collapsed:: true
	- As a high schooler in Wyncote, Pa., his after-school job involved cleaning goose pens and rat cages. To find a better life, he learned to program computers.
	- At the University of Pennsylvania, he completed three degrees in four years — bachelor’s degrees in math and physics and a master’s degree in applied mathematics — before moving to the West Coast for his doctorate. He enrolled at Stanford to study artificial intelligence. His thesis committee included three of the researchers who had founded the field in the late 1950s.
	- It was a fallow period for artificial intelligence research — what was later called an A.I. Winter. But Dr. Lenat was among a new generation of researchers who revived interest in what had become a decades-long struggle to create machines that could mimic the brain.
- ![image.png](./assets/image_1734409441753_0.png){:height 468, :width 778}
- CYC project
  collapsed:: true
	- 1984: chief scientist at the Microelectronics and Computer Technology Corporation, or M.C.C.
	  collapsed:: true
		- several of the country’s leading tech companies helped create a corporation meant to keep the United States at the forefront of technological research:
		- Led by Admiral Bobby Ray Inman — former director of naval intelligence, former director of the N.S.A. and former deputy director of the C.I.A. — the corporation hired Dr. Lenat as its chief scientist in 1984. From the company’s new headquarters in Austin, Texas, he began work on his common sense engine.
	- 1986
	  collapsed:: true
		- he told Time magazine that the project would require 350 human-years of work to even approach success.
	- 1994: Cycorp
	  collapsed:: true
		- In 1994, as another A.I winter arrived, Dr. Lenat spun the project out into a new company called Cycorp. Financed by various government organizations and private companies, he continued building his common sense engine until his death.
	- He and his collaborators spent more than 2,000 human years on the project, writing more than 25 million rules.
- ✅[AM (1976)](https://apps.dtic.mil/sti/pdfs/ADA155378.pdf)
  collapsed:: true
	- Each concept is represented as a frame-like data structure with 25 different facets or slots.
	  The types of facets include: Examples, Definitions, Generalizations, D( izin/Range, Analogies,
	  Interestingness, and many others
	- AM is initially given a collection of 115 core concepts, with only a few facets filled in for
	  each. Its sole activity is to choose some facet of some concept, and fill in that particular slot.
	  In so doing, new notions will often emerge. Uninteresting ones are forgotten, mildly
	  interesting ones are kept as parts of one facet of one concept, and very interesting ones are
	  granted full concept-module status. Each of these new modifies has dozens of blank slots,
	  hence the space of possible actions (blank facets to fill in) grows rapidly. The same
	  heuristics are used both to suggest new directions for investigation, and to limit attention:
	  both to sprout and to prune.
	- AM begins with nothing but a scanty knowledge of concepts: Sets, substitution, operations, equality, and so on. In particular, AM is not told anything about proof, single-valued functions, or numbers.
	- AM is forced to judge a priori the value of each new concept, to lose interest quickly in
	  concepts which aren't going to develop into anything. Often, such judgments can only be
	  based on hindsight. For similar reasons, AM has difficulty formulating new heuristics
	  which are relevant to the new concepts it creates. Heuristics are often merely compiled
	  hindsight.
	- This ultimate limitation was reached. AM's performance degraded more and more as it progressed further away from its initial base of concepts. Nevertheless, AM demonstrated that selected aspects of creative discovery hi elementary mathematics could be adequately represented as a heuristic search process. Actually constructing a computer model of this activity has provided an experimental vehicle for studying the dynamics of plausible empirical inference.
	- AM later re-discovered multiplication in three other ways: as repeated addition, as the numeric analog of the Cartesian product of sets, and by studying the cardinality of power sets ($2^{A+B} = 2^A \times 2^B$). These operations were defined in different ways, so it was an unexpected (to AM) discovery when they all turned out to be equivalent. These surprises caused AM to give the concept 'Times' quite a high Worth rating.
	- machine
	  collapsed:: true
		- SUMEX, PDP-10, KI-10 uniprocessor, 256k core memory
		- about 1 minute per task, 2 hours per run
	- The agenda is a list of tasks along with their reasons. A task's worth is the sum of its reasons' worths. AM always performs the task with the highest worth.
	- a concept is an object with some known predicates
	- a heuristic is of form "if <condition>, then run <actions>".
	- each action has exactly one out of three possible effects:
	  collapsed:: true
		- add a new task to agenda
		- create a new concept
		- add or delete an entry to a facet of a concept
	- Some example heuristics:
	  collapsed:: true
		- To fill in examples of X. If X is a special case of Y, then for each example of Y, check if it a definition of X. If so, then add it to the list of examples of X.
		- If some but not most examples of X are also examples of Y, then create a new concept "X and Y".
		- If very few examples of X are found, then add the following task to the agenda: "Generalize the concept X", for the following reason: "X are quite rare; a slightly less restrictive concept might be more interesting".
	- While I have tried to keep every pseudocode in Python, here I must say that Lisp does it better. A definition is just a program that takes a data structure and evaluates to True/False, and since a definition is itself a data structure, we have the famed homoiconicity. For example, `f-inverse-of-b` is defined as `'(lambda x (b (f x)))`, then executing the definition is simply `(f-inverse-of-b x)`. Indeed, every new heuristic, algorithm, definition, example, etc, that AM can construct, is just a Lisp object, which is both code and data (the famed homoiconicity). This allows AM to enumerate over possible codes by searching over trees with leaves being primitive symbols (including the natural numbers), or previously constructed symbols.
	- ```python
	  class Concept:
	      def __init__(self):
	          self.name = ""
	      	self.examples = []
	          self.definitions = []
	          ...
	  
	  class Agenda:
	      def __init__(self):
	          self.tasks = []
	      def add(self, task):
	          self.tasks.append(task)
	      def pop(self):
	          return self.tasks.pop()
	      def merge(self):
	          # merge tasks with the same content, while combining their reasons
	      def sort(self):
	          self.tasks = sorted(self.tasks, 
	                              key=lambda x: sum([reason.worth for reason in x.reasons]))
	  
	  class Heuristic:
	      def __init__(self, name, conditions, actions):
	          self.name = name
	          self.conditions = conditions
	          self.actions = actions
	      def run(self, inputs):
	          for condition in conditions:
	              if not condition(inputs):
	                  return
	          for action in actions:
	              action(inputs)
	  
	  def special_case_example(x):
	    
	  
	  while True:
	      # pick the most important task right now
	      agenda.merge()
	      agenda.sort()
	    	task = agenda.pop()
	      
	  ```
	- a concept
	  collapsed:: true
		- NAME: Prime Numbers
		- DEFINITIONS:
		  collapsed:: true
			- ORIGIN: Number-of-divisors-of(x) = 2
			- PREDICATE-CALCULUS: Prime(x):=$(\forall z)(z | x \to z = 1 \wedge z = x)$
			- ITERATIVE: (for $x>1$): For i from 2 to $\sqrt x,\neg(i | x)$
		- EXAMPLES: 2,3,5,7,11,13,17
		  collapsed:: true
			- BOUNDARY: 2, 3
			- BOUNDARY-FAILURES: 0,1
			- FAILURES: 12
		- GENERALIZATIONS: Nos., Nos. with an even number of divisors, Nos. with a prime number of divisors.
		- SPECIALIZATIONS: Odd Primes, Prime Pairs, Prime Uniquely-addables
		- CONJECTURES: Unique factorization, Goldbach's conjecture, Extremes of Number-of-divisors-of
		- INTUITIONS: A metaphor to the effect that Primes are the building blocks of all numbers
		- ANANOGIES:
		  collapsed:: true
			- Maximally-divisible numbers are converse extremes of Number-of-divisors-of
			- Factor a non-simple group into simple groups.
		- INTEREST: Conjectures tying Primes to TIMES, to Divisors-of, to closely related operations
		- WORTH: 800
	- an **example** is an object (a Lisp list)
	- The initial concepts of AM. `|` means "is a". `|||` means "is an example of". [@, page 106]
	  collapsed:: true
		- ![image.png](./assets/image_1734230505438_0.png)
	-
	-
- ✅Traveller Book 5: High Guard (1980) [@TravellerBook51980]
  collapsed:: true
	- Offensive weapons include lasers, energy weapons (plasma and fusion guns), particle accelerators, meson guns, and missiles.
	- Active defenses include offensive weapons such as lasers and energy weapons, and defensive weapons such as sandcasters and repulsors. Passive defenses include screens such as meson screens, nuclear dampers, and black globe generators, and construction considerations such as configuration and hull armor.
	- When the craft being carried are in the ten to thirty ton range, the ship is a fighter carrier. When the ships being carried are in the 10,000 ton range, and the large ship is 200,000 tons or more, the ship is called a tender or transport.
	- Small Craft: Various non-starships (such as pinnaces, cutters, ship's boats, shuttles, lifeboats, and fighters) are detailed in the section on small craft. Small craft are carried at their own tonnage on ships 1000 tons and under; they require tonnage equal to 130% of their mass within the hull of larger ships. The cost is Cr2,000 per ton.
	- Non-starships under 100 tons are considered to be small craft. Production of small craft uses a system which differs in some details from that used for starships and non-starships of 100 tons or more... Only hulls of metal may be used for small craft. They are built to tonnages up to 99 tons, at a cost of Cr100,000 per ton...
	- stages in a battle
	  collapsed:: true
		- movement, laser fire, laser return fire, ordnance launch (missiles, etc), computer reprogramming (modify hardware and software modules)
- ❌The nature of heuristics (1982)
- ✅Theory formation by heuristic search: The nature of heuristics II : background and examples (1983) [@lenatTheoryFormationHeuristic1983]
  collapsed:: true
	- the accretion model for theory formation: There are these operations that operate in a rough loop.
	  collapsed:: true
		- Gather empirical data about definitions, objects, operations, rules, etc.
		- Notice regularities and exceptions in the data.
		- Add and modify hypotheses.
		- Calculate predictions of hypotheses. Carry out experiment to test hypotheses.
		- Construct new definitions, objects, etc, that compresses the hypotheses and data into more succinct statements.
		- (rarely) Construct new heuristics and deprecate old heuristics, such that it would have made the loop run faster.
		- (very rarely) Change the underlying data structure, so that the data is more efficiently encoded.
	- Each operation executes according to heuristic rules, even heuristics itself is done according to heuristics. That is, we use heuristics to decide which heuristic to apply first, which heuristic to deprecate, how to generate new candidate heuristics, etc.
	- As AM ran longer and longer, the concepts it defined were further and further from the primitives it began with, and its performance slowed down... What a human learns, after working in a new field for a while, is more than the terms, objects, operations, results, etc.; he/she learns the necessary domain-specific heuristics for operating efficiently with those concepts. AM's key deficiency appeared to be the absence of heuristics which cause the creation and modification of new heuristics.
	- To remedy this situation, we conceived the EURISKO project. Its fundamental assumption was that the task of 'discovering and modifying useful new heuristics' is qualitatively similar to the task that AM already worked on, namely 'discovering and modifying useful new math concepts'. Therefore, we assumed, the heuristic synthesis can be performed by a program just like AM, but in addition to having frames for objects like Sets and Truth-Values, the initial frames now include heuristic rules. am had primitive operators like Coalesce, Compose, and. Intersect, to which EURISKO added new operators that can work on heuristics: generate, evaluate, and modify them... the most important decision in designing EURISKO; to *not* distinguish meta-heuristics from heuristics. The same rule might-and did-operate on mathematical objects, on VLSI circuits, on Traveller fleets, *and on other heuristics*.
	- EURISKO was applied to number theory, set theory, Traveler RPG, and MOS design. In MOS, it designed some new circuit elements that were fabricated, such as a more efficient flip-flop that was "difficult to produce masks for and difficult to fabricate, but extremely small and fast".
	- Some example heuristics:
	  collapsed:: true
		- R7: If $f$ is an interesting function of type $A \times A \to B$, then $g(a) := f(a,a)$ is possibly an interesting function of type $A \to B$, and should be studied.
		- R9: If $f: A \to B$ is an interesting function, and $S \subset B$ is extremal in some sense, then $f^{-1}(S)$ is possibly an interesting subset of $A$ and should be studied.
		- R10: If some normally-inefficient operation can be done quickly on objects in $A$, then increase the interestingness of concept $A$.
		- R16 (conjecturing): If the first few examples of a concept $C$ have just been found, then examine a typical one, and see what properties if satisfies; then see if any of those properties is satisfied by all examples of $C$.
		- For example, in the naval game, we have $CanCarry: Ship \times Ship \to Boolean$, and EURISKO studied whether some ships can carry themselves to the battlefield.
		- One type of craft which is commonly included is a fighter, which is carried into the area by a carrier... Following R7, the possibility was considered of building fighters that could transport themselves into the battle area; due to the way the constraints were set up, this turned out to be a very powerful--if bizarre--design tactic. Essentially, each fighter was equipped with just enough 'sailing' and 'launching' equipment for it not to need a carrier. Once airborne, this excess equipment was jettisoned... This design tactic caused the rules publishers to modify the constraints, so that in 1982 one could not legally build such a thing.
		- The constraints specified a minimum fractional tonnage which had to be held back, away from battle \[under the pretense of "fuel tenders"\]. R7 caused us to consider using warships for that purpose, and indeed that proved a useful decision: whenever some front-line ships were moderately (but not totally) damaged, they traded places with the tenders in the rear lines. This maneuver was explicitly permitted in the rules, but no one had ever employed it except in desparation near the end of a nearly-stalemated battle, when little besides tenders were left intact. Due to the unintuitive and undesirable power of this design, the tournament directors altered the rules so that in 1982 and succeeding years the act of 'trading places' is not so instantaneous. The rules modifications introduced more new synergies (loopholes) than they eliminated, and one of those involved having a ship which, when damaged, fired on (and sunk) itself so as not to reduce the overall fleet agility.
		  collapsed:: true
			- COMM. Probably in this case, R7 is applied like "Ships of type a is held back to tend to fuel of ships of type b" and then EURISKO considered "What if warships are held back to be the fuel tenders for warships?"
		- In the naval fleet design task, R9 was used quite heavily. The functions f in that simulated world apply to the design and behavior of fleets and of individual ships: `FleetComposition`, `Agility`, `Armor`, `WeaponVariety`, `TimeToEngage`, etc... the ultimate design did settle on a fleet containing almost all identical ships, each with nearly minimal agility, maximal armor, maximal weapon variety, almost all of which engaged with the enemy immediately, etc. One extremal ship employed in the 1981 tournament was a tiny but incredibly agile ship, with no offense whatsoever, that simply could not be hit. Although this was no longer legal in 1982, a ship with massive offensive capability and no defense was instrumental in that new fleet.
		- \[For R16,\] once a new design was tested in simulated combat, several characteristics of the conflict were noted (speed of victory, final state of the victor, amount of tactical decision-making required, etc.). These were formed into proto-conjectures, which were then tested by subsequent mock battles, and any which held over most of the simulations were believed as empirically valid.
- ✅EURISKO: a program that learns new heuristics and domain concepts: the nature of heuristics III: program design and results (1983) [@lenatEURISKOProgramThat1983]
  collapsed:: true
	- Each tournament was single elimination, six rounds. EURISKO's fleet won the first tournament, thereby becoming the ranking player in the United States (and also, an honorary Admiral in the Traveller navy). This win is made more significant by the fact that no one connected with the program had ever played this game before the tournament, nor seen it played, and there were no practice rounds.
	- So fleets fight (each battle taking between 2 and 30 minutes), and the battle is analyzed to determine which design policies are winning, and--occasionally--what fortuitous circumstances can be abstracted into new design heuristics. An example of the former (gradual parameter adjustment) was when the Agility of ships gradually decreased, in favor of heavier and heavier Armor plating of the hulls. An example of the latter (fortuitous monsters) was when a purely defensive ship was included in an otherwise-awful fleet, and that fleet could never be fully defeated because that defensive ship, being very small, unarmored, and super agile, could not be hit by any of the weapons of the larger nearly-victorious fleet.
	- EURISKO has by now spent 1300 CPU hours on a personal LISP machine, the Xerox 1100, managing this heuristically-guided evolution process. The author culled through the runs of EURISKO every 12 hours or so of machine time (i.e., each morning, after letting it run all night on one or more 1100 s), weeding out heuristics he deemed invalid or undesirable, rewarding those he understood and liked, etc. Thus the final crediting of the win should be about 60/40% Lenat/EURISKO, though the significant point here is that neither party could have won alone. The program came up with all the innovative designs and design rules (i.e., the loopholes in the TCS formulation), and recognized the significance of most of these. It was a human observer, however, (the author) who appreciated the rest, and who occasionally noticed errors or flaws in the synthesized design rules which would have wasted inordinate amounts of time before being corrected by EURISKO.
	- Most of the battles are tactically trivial, the contest being decided by the designs of the two fleets; that--and the 100-page thickness of the rule-books--were the reason this appeared to be a valid domain for EURISKO. It is also important--for EURISKO to have a good chance of finding new results--that the size of the search space (legal fleet designs) be immense: with 50 parameters per ship, about 10 values for each parameter (sometimes fewer, often an infinite number), and up to 100 distinct ships to design and include in each fleet, any systematic or Monte Carlo analysis of the problem is unlikely to succeed. In fact, the designers had done a detailed linear programming model of the game, and their computer runs convinced them that a fleet of about 20 behemoths was the optimal design. This was close to the starting fleet design the author supplied to EURISKO, and it was also close to the designs that most of the tournament entrants came up with.
	- One very general result that Eurisko abstracted from this evolutionary design process was a 'nearly extreme' heuristic.
	- In almost all Traveller TCS fleet design situations, the right decision is go for a nearly-but not quite-extreme solution.
	- Thus, the final ships had Agility 2 (slightly above the absolute minimum), one weapon of each type of small weapons (rather than 0 or many), the fleet had almost as many ships as it could legally have but not quite (96 instead of 100), etc. Big weapons (enormous spinal mounts capable of blasting another ship to pieces with a single shot) were gradually phased out, in favor of an enormous number of small missile weapons. The fleet had almost all (75) ships of this type though there was one ship which was small and super agile and purely defensive (and literally unhittable by any reasonable enemy ship), and a couple monstrous hulks which had no chance of defense against normal ships, but which had weapons just barely accurate enough to hit any enemy ships that were (of course!) small and agile and purely defensive.
	- Some of the strangest elements of the final fleet were discovered accidentally rather than as the result of a long, continuous evolution process. The usefulness of a tiny defensive ship was apprehended after a 'lifeboat' was the only survivor from one side's fleet, yet round after round it could not be hit at all. That design was immortalized into a design strategy ("Include one such ship in your fleet!"), and a very general rule began looking for ships that could destroy it. Finally, one was found; it was quite strange, and would never have been included except to counter the possibility that the enemy might have small defensive ships too. Against any normally-armed ship, it would quickly be destroyed. Basically, this new ship had moderate size, no armor, the largest possible guidance computer, the slowest possible engines for its size and equipment, and one single, enormous accelerator weapon-a weapon usually ignored because its broad beam glances harmlessly off large armor-plated ships, but which is very easy to aim. This combination is ineffective for most combat, but is just enough to fire at the little boats it might be sent against. We were a little disappointed that none of the other entrants had small defensive "stalemate guarantors" of the sort we took.
	- At the 1981 championship, EURISKO's fleet consisted of 75 "Eurisko class" ships (very slow, very armored, and many small missiles) discovered thanks to the "nearly extreme" heuristic, a tiny boat that is almost impossible to hit ("stalemate guarantor"), and a ship designed to hit the tiny boat, and a few others. Whereas most battles took 2--4 hours, EURISKO's opponents resigned in a few minutes, except the very last round, where EURISKO faced against an opponent with basically the same design, except they didn't have the stalemate guarantor. So if EURISKO seemed to be losing, it can retreat all its fleet and bring out the stalemate guarantor, repair the fleet to full health, then do it again. EURISKO could keep doing this until it gets a lucky dice roll to win.
	  collapsed:: true
		- Almost all the other entrants in the final tournament had fleets that consisted of about 20 ships, each with a huge spinal mount weapon, low armor, fairly high agility, and a large number of secondary energy weapons (laser-type weapons). This contrasted with EURISKO's fleet in almost all ways... After an exchange of fire, most of the enemy behemoths did indeed sink one of EURISKO's ships, for a total loss of about 15 ships. In return, EURISKO's 96 ships sank about 5 of the enemy... In this scenario--which was the most common one in all EURISKO's battles during the tournament--there is no need at all to bring any of its specialty ships into the front lines at any time... Its second opponent did some calculations and resigned without ever firing a shot. The subsequent opponents resigned during their first or second round of combat with this fleet.
		- EURISKO's few specialty ships remained unused until the final round of the tournament, battling for 1st versus 2nd place. That opponent also had ships with heavy armor, few large weapons, low agility, etc. He was lacking any fast ships or fast-ship-killers, though. The, author simply pointed out to him that if EURISKO were losing then (according to the TCS rules) our side need put only our fast ship out the front line, withdraw all the others and repair them, and--once they were finished repairing themselves--effectively start the battle all over again. This could go on ad infinitum, until such time as EURISKO appeared to be winning, and in that case we would let the battle continue to termination. The opponent did a few calculations and surrendered without fighting. Thus, while most of the tournament battles took 2--4 hours, most of those involving EURISKO took only a few minutes.
		- The tournament directors were chagrined that a bizarre fleet such as this one captured the day, *and* a similar fleet (though not so extreme) took second place. The rules for future years' TCS tournaments were changed to eliminate the design singularities which EURISKO found. For example, repairing of damaged ships was prohibited, so the utility of the unhittable ship became negligible.
	- At the 1982 championship, rules were changed to plug the loopholes, and the rules were published only a week before the event. Fortunately, the loophole-plugging created even more loopholes, and EURISKO's general heuristics remained valid, so it won again, without needing another 1300 CPU-hours.
	  collapsed:: true
		- Using the 'nearly-extreme' heuristic, for instance, it quickly designed a ship with practically no defense, and that ship filled a key role in the final fleet. Coincidentally, just as the defensive ship made a difference in the 1981 final round, the offensive ships made a difference in the 1982 final round. In each case, their presence caused the opponent to resign without firing a shot... Just as most 'experienced' players jeered at the 1981 fleet because it had practically no large weapons, they jeered at the 1982 fleet because it was unarmored *and* it still had no large weapons, even though the rules changes had made them much cheaper.
	- Since heuristics are themselves objects, so heuristics can apply to them as well, and EURISKO would learn heuristics about heuristics itself, but it eventually hit upon two adversarial examples:
	  collapsed:: true
		- One of the first heuristics that EURISKO synthesized (H59) quickly attained nearly the highest Worth possible (999). Quite excitedly, we examined it and could not understand at first what it was doing that was so terrific. We monitored it carefully, and finally realized how it worked: whenever a new conjecture was made with high worth, this rule put its own name down as one of the discoverers! It turned out to be particularly difficult to prevent this generic type of finessing of EURISKO's evaluation mechanism. Since the rules had full access to EURISKO's code, they would have access to any safeguards we might try to implement. We finally opted for having a small 'meta-level' of protected code that the rest of the system could not modify.
		- The second 'bug' is even stranger. A heuristic arose which (as part of a daring but ill-advised experiment EURISKO was conducting) said that all machine-synthesized heuristics were terrible and should be eliminated. Luckily, EURISKO chose this very heuristic as one of the first to eliminate, and the problem solved itself.
	-
	- ```python
	  class Ship:
	      def __init__(self, parts):
	          self.parts = parts
	          ...
	      def cost(self):
	          return self.cost_modifier() * sum([part.cost for part in self.parts])
	      def mass(self):
	          return self.mass_modifier() * sum([part.mass for part in self.parts])
	      # similarly for speed, armor, size, power, fuel...
	      ...
	  class Fleet:
	      def __init__(self, ships):
	          self.ships = ships
	      def isAlive(self):
	          return self.ships != []
	      ...
	  
	  while True:
	      
	  ```
	- ```txt
	  NAME: IsA, Isa, Is-a, ISA, IS-A
	    Informally: is, element-of, is-in
	  DOMAIN/RANGE: (Units→ SetOfUnits)
	  IS-A: Sot
	  FilledWithA: Set
	  EachEntryMustBeA: Unit representing a set
	  Inverse: Examples
	  UsedByInheritanceModes: InheritAlongIsAs
	  MakesSenseFor: Anything
	  MyIsA: Eurisko unit
	  MySize: 500 words
	  MyCreator: D. Lenat
	  MyTimeOfCreation: 4/4/79 12:01
	  Generalizations: AKindOf
	  Specializations: MemberOf, ExtremumOf
	  Worth: 600
	  Cache: Always
	  English: The slot which tells which classes a unit belongs to.
	  ALGORITHMS:
	    Nonrecursive Slow PossiblyLooping: λ (u) {c ∈ Concepts | c.Defn(u)}
	  DEFINITIONS:
	    Nonrecursive Fast PossiblyLooping: λ (u,c) c.Defn(u)
	  ```
	- [HG Starships: Lenat and EURISKO’s Winning Fleet](https://www.tip.net.au/~davidjw/tavspecs/best_tml/Starships%20(HG)%20-%20Professor%20Lenat%20and%20EURISKO's%20Winning%20Fleet.htm)
- ✅AM: A Case Study in AI Methodology (1984)
  collapsed:: true
	- The program initially contains data-structures representing about 100 elementary mathematical concepts (e.g. sets, composition of operations) and about 230 "heuristic rules".
- ✅Why AM and EURISKO appear to work (1984)
  collapsed:: true
	- "we now agree that the details of such unstated heuristics should have been given in the thesis." But he discounts most of the criticism as "minor organizational matters or implementation details."
- ✅Computer software for intelligent systems (1984) [@lenatComputerSoftwareIntelligent1984]
	- Applying "coalesce" to Traveller, EURISKO developed a novel strategy: it directed a disabled ship to fire on and sink itself. Because the game's stylized rules defined overall fleet agility in terms of the slowest vessel, this was a reasonable method of in creasing the fleet's power.
	- In working on the design of integrated circuits, for example, EURISKO stumbled on the fact that symmetry is a desirable property for such chips, although it did not understand why; when it was later instructed to design fleets for the Traveller game, EURISKO decided to make them symmetrical and justified its decision by referring to its earlier experience in designing circuits.
- ✅CYC: Using common sense knowledge to overcome brittleness and knowledge acquisition bottlenecks (1985) [@lenatCycUsingCommon1985]
  collapsed:: true
	- assumptions
	  collapsed:: true
		- To build CYC, we must encode all the world’s knowledge down to some level of detail; there is no way to finesse this.
		- We are not talking about assembling a large textual data base of facts; entries in the knowledge base are so heavily interrelated that they are nothing more than their set of interconnections... For this reason, simply having an online version of an encyclopedia would be of little use, as there is practically nothing that current AI technology could draw from the raw text.
		- AI has for many years understood enough about representation and inference to tackle this project, but no one has sat down and done it.
		- We need to encode the first 400 articles by hand. After that, we can mostly do copy-and-edit for the other 30000 articles.
		- Once built, the CYC system could form a common language or foundation upon (within) which future AI programs could be written... its size and breadth and usefulness serving as irresistible lures to its use, and those uses serving in turn to enhance CYC’s size and breadth and usefulness.
	- Plan
	  collapsed:: true
		- Phase 1 (1985--1988): encode 400 encyclopedia articles by hand.
		- Phase 2 (1988--1993): encode 30000 encyclopedia articles by copy-and-edit.
		- Phase 3 (1993--?): use Cyc to solve AI problems and apply Cyc for commercial purposes.
	- there are about 400 distinct kinds of articles. We expect our system to contain about 10,000 frames at that time, about half of which will be very general (common sense) concepts.
	- The average article we add now (Fall 1985) requires dozens of new common sense frames to be added; this rate should drop asymptotically over time; our current guess is that the rate will stabilize at about 0.1 new entry per article, after the first few thousand articles are entered.
	- conservative estimate for the data enterers’ rate is one paragraph per day; this would make their total effort about 150 person-years.
	-
- ✅When will machines learn? (1989): 0.5M assertions, 50M by 1995. NLU and ML by 1995.
	- We now have about half a million entries in it, and we expect it to increase by one order of magnitude by mid-1990 and one more by the end of 1994. We expect that at roughly that point, a kind of crossover will occur, and it will be cost-effective to enlarge the system from that point onward by having it learn mostly on its own and from online texts.
	- my 1975-1984 work on AM and Eurisko helped to spark the rebirth of the machine learning field. I fully expect that CYC will spark a vasty greater renaissance in that field, and that I will be rehabilitated (considered a learning researcher again) during the latter half of the 1990s.
	- since CYC started in September, 1984, and the crossover to automated KA was and still is scheduled to occur ten years later than that, a tongue-in-cheek answer to this editorial's apparently rhetorical title (When Will Machines Learn?) might be: "September 1, 1994."
- ❌Invention and exploration in discovery (1990)
  collapsed:: true
	- https://dspace.mit.edu/handle/1721.1/14257?show=full
	- PhD thesis containing some info on AM and Eurisko.
- Building Large Knowledge-Based Systems (1989) [@lenatBuildingLargeKnowledgebased1989]: mid-1989, 1M assertions, 50K concepts, about 0.1% of common sense done. Need 10--50% for knowledge pump to be primed. Expect that by 1995.
  collapsed:: true
	- Chap 1: Philosophy
	  collapsed:: true
		- Humans have 4 ways to act in new situations: Remember a similar situation and act like it; Analogize to a far-flung situation; Fall back on common sense; Learn more about this new situation (recursion from "X" to "learn more about X")
		- The Cyc group at MCC is attempting to build a single intelli­ gent agent whose knowledge base contains these tens of millions of entries.
		- A rough estimate puts the number of attributes at 15,000 by 1994.
		- if you choose task-specific primitives, you'll win in the short run (building a program for that narrow domain) but lose in the long run (you'll find yourself painted into a corner when you try to scale the program up.)
		- small KBs likely won't scale up easily into huge KBs. This, then, is the representation trap, the trap that has snared (or even characterized) expert systems to date: choosing a set of long, complex primitives (predicate names) that have a lot of knowledge compiled within them, and writing rules that are also tailored to the program's domain (omitting premises that needn't be worried about in that par­ticular task). The bait in the trap is the fact that it works - at least within the narrow domain for which that particular program was de­ signed. The catch is that the resultant system is isolated and brittle.
	- Chapter 8: The next 5 years.
	  collapsed:: true
		- As of mid-1989, there were about a million primitive "pieces of data" in the Cyc KB, mostly individual entries in the values of slots. These are dispersed across roughly 50,000 units. About 6,000 of these units are Collections, 148 of which are actually specs of Collection (that is, sets of sets) and 103 of which are specs of Slot (that is, sets of slots). About 4,000 different kinds of slots exist in the KB. There are about 4, 100 different kinds of processes and scripts (Process.allSpecs), and they have a total of 9,400 instances (that is, Process.alllnstances). There are 1,700 specs of TangibleObject, having a total of 2,321 explicitly represented instances. About 2,000 units ex­ plicitly represent constraints on slot values. There are 900 types of IntangibleStuff (IntangibleStuff.allSpecs), and they have a total of 9,900 instances (IntangibleStuff.alllnstances).
		- The strengths of the KB are, of course, its breadth, covering (or at least touching upon) the topics in the Encyclopaedia Britannica Propae­dia. Only a very small fraction (less than 1 percent) of the topics in a desk encyclopedia are covered. And the KB contains an even smaller fraction of the knowledge required to understand, for example, a typi­cal National Enquirer article. Two points are worth making about these numbers.
		- First, the fraction of the KB that's built is too small to expect much "power" from yet. We have always predicted that the knee of the curve would be somewhere in the 10-50-percent range of consensus reality knowledge, and we're still down around the 0.1-percent level.
		  collapsed:: true
			- It should still be possible to see isolated flashes of useful common sense reasoning (that's linear with the KB size), but fruitful analogies will be rare indeed (they're quadratic with the KB size, so a size of .001 means only one millionth of the analogies we'll eventually hope to generate could be generated now).
		- Second, we're right on schedule. Our plan has been to stay small until about now, entering just enough knowledge to come up against the tough representation and reasoning problems we have to "crack" and spending most of our effort on finding adequate solutions for them. And that is precisely what we've done.
		- It is up and running, in CommonLisp, on Symbolics Ma­ chines of all sorts, Sun3s, TI Explorerll + s, Maclls (with Ivory boards), and (with some conversion) VAX machines. The user interface and full knowledge server environment is debugged now only on the first of those types of machines, Symbolics.
		- If it helps you gauge the speed of the system (it's not clear why it should!), CycL can process about 2,500 primitive (Level 0) operations per second. A complicated inheritance operation that causes a reason­ able amount of rippling will take several seconds to finish "percolat­ing."
	- Just as, today, no one would even think of buying a computer that didn’t have an operating system and that couldn’t run a spreadsheet and a word processing program, we hope that by 1999 no one would even think about having a computer that doesn’t have Cyc running on it.
- ✅Cyc: A midterm report (1990): >1M assertions, 30K concepts. expect >10M by 1995.
  collapsed:: true
	- currently contains over a million assertions, and we expect almost an order of magnitude increase in the coming five years. There are currently 30,000 units, of which approximately 4,500 are types of predicates, and approximately 5,000 are collections.
- ✅Cyc: toward programs with common sense (1990): 1M assertions
  collapsed:: true
	- non-monotonic, non-consistent logic
	  collapsed:: true
		- A sentence $\sigma$ has 9 possible statuses in a knowledge base: $\sigma$ can be unknown, implied, or an axiom. Similarly for $\neg\sigma$.
		- Of these 9 statuses, 2 mean "$\sigma$ is true", 2 mean "$\neg\sigma$ is true", 1 means "don't know either way", and 4 mean "both $\sigma$ and $\neg\sigma$ are true."
		- $\mathrm{Tell}(\sigma)$ adds $\sigma$ to the axiom set. If $\sigma$ used to be unknown, then now $\sigma$ is provable by the following argument: "$\sigma$ is an axiom, therefore it is true." If $\sigma$ used to be implied, then that argument is one extra argument for $\sigma$.
		- $\mathrm{Unassert}(\sigma)$ removes $\sigma$ as an axiom, if it is an axiom. $\sigma$ can still be implied by other axioms, or it can be unknown. That is, it removes $\sigma$ from the axiom set.
		- $\mathrm{Deny}(\sigma)$ explicitly makes all arguments for $\sigma$ invalid. That is, $\mathrm{Deny}(\sigma)$ is equivalent to adding $\forall a, \mathrm{argumentFor}(a, \sigma) \implies \mathrm{invalidArg}(a)$ to the axiom set.
- ✅On the thresholds of knowledge (1991) [@lenatThresholdsKnowledge1991]
  collapsed:: true
	- Originally published as [MCC Technical Report AI-126-87](https://stacks.stanford.edu/file/druid:wg864kd8394/wg864kd8394.pdf)
	- hypotheses
	  collapsed:: true
		- Knowledge Principle (KP). A system exhibits intelligent understanding and action at a high level of competence primarily because of the knowledge that it can bring to bear: the concepts, facts, representations, methods, models, metaphors, and heuristics about its domain of endeavor.
		- Explicit Knowledge Principle: While knowledge may be compiled to opaque lumps of code for efficiency, there should always be a declarative version of that, so that they can be subject to meta-reasoning.
		- Breadth Hypothesis (BH). Intelligent performance often requires the problem solver to fall back on increasingly general knowledge, and/or to analogize to specific knowledge from far-flung domains.
		- Empirical Inquiry Hypothesis (EH). The most profitable way to investigate AI is to embody our hypotheses in programs, and gather data by running the programs. The surprises usually suggest revisions that start the cycle over again. Progress depends on these experiments being able to falsify our hypotheses. Falsification is the most common and yet most crucial of surprises. In particular, these programs must be capable of behavior not expected by the experimenter.
		- Difficult Problems Hypothesis. There are too many ways to solve simple problems. Raising the level and breadth of competence we demand of a system makes it easier to test -- and raise -- its intelligence.
		- Knowledge Is All There Is Hypothesis. No sophisticated, as-yet-unknown *control structure* is required for intelligent behavior.
		- The Local Consistency Hypothesis. There is no need--and probably not even any possibility--of achieving a global consistent unification of several expert systems' KBs (or, equivalently, for one very large KB). Large systems need local consistency.
		- The Coherence Hypothesis. Moreover, whenever two large internally consistent chunks C1, C2 are similar, their heuristics and analogies should cohere; e.g., if the "going up" metaphor usually means "getting better" for C1, then it should again mean "getting better" for C2, or else it should not apply at all there.
	- FIG. Deceptive local maxima
	  collapsed:: true
		- With a little hard work (about 6 person-months), one can get a knowledge-free system working, like self-organized neural networks, Simon and Newell's General Problem Solver, etc. This allows the researcher to publish a quick paper, a student to earn their PhD degree, and so on. Putting in more hard work does not result in a better system, but usually makes things worse as the code becomes bloated and unmanageable. Academic myopia stops people from trying to get out of this local maximum, since people just want to get published papers.
		- With a lot more hard work (about 10 person-years), one can get a system with a lot of specialized knowledge working. This is where the commercialized expert systems live. However, the general consensus is that as an expert system grows beyond 10K rules, it starts to suffer from its weight of . Commercial myopia stops people from trying to get out of this local maximum, since people just want to sell products.
		- However, specialized expert systems cannot be glued together efficiently, because each of them lives in a differently simplified world. That is, "plateau-hopping requires breadth".
		- ![20241218_152932.jpg](./assets/20241218_152932_1734564897077_0.jpg){:height 557, :width 719}
	- project plan
	  collapsed:: true
		- ![image.png](./assets/image_1734568053265_0.png)
		  collapsed:: true
			- [@, figure 3]
		- Priming the knowledge pump: Hand-code a large, broad knowledge base. Hand-coding is faster than all other methods for this.
		- Tutoring phase: When enough knowledge is present, we would tutor it in constrained natural language. This accelerates the knowledge priming.
		- Learning phase: acquire more knowledge from texts, databases, etc. This allows it to catch up to the frontier of human knowledge.
		- Discovery phase: The system will learn by discovery, like Eurisko and AM. Unlike them, it will not run out of steam, because it will know enough to never run out of steam.
	- It's been going very well.
	  collapsed:: true
		- When CYC began, back in late 1984, we estimated it had a <10% chance of succeeding. Year by year, our optimism has grown; we now put its chances at >50%. Yes, we spent most of the early years in thrashing out a representation language and ontology, and now we're spending most of the effort using that (rather than fighting it) to do knowledge entry.
	- We are betting our professional lives--the few decades of useful research we have left in us -- on KP, BH, and EH.
	- dunking on the free lunch and neural nets
	  collapsed:: true
		- Because they are unaesthetic! And they entail person-centuries of hard knowledge-entry work.
		- Until we are forced to them, Occam's Razor encourages us to try more elegant solutions, such as training a neural net "from scratch"; or getting an infant-simulator and then "talking to it". Only as these fail do we turn, unhappily, to the "hand-craft a huge KB" tactic.
	- the numbers
		- estimate in 1983: 600K concepts, 60M assertions.
		- estimate in 1991: 1M concepts, 100M assertions, 200 person-years, \$50M, 10 years, expected to be finished by 1995.
		- most commonsense inference is 2--6 "rule firings" deep.
	- fun fact
	  collapsed:: true
		- CYC knowledge enterers often make use of absurd supermarket tabloid headlines and articles, not because we want CYC to believe those things (!), but rather because they provide a natural introspective ice-breaker, namely asking oneself "Now why do I find that headline hard to believe?"
	- Why 1M concepts?
		- Alan Kay: 30K encyclopedia articles with 30 concepts per article gives 0.9M concepts.
		- Japanese Electronic Dictionary Research Project (EDR): in several languages, there are about 200K words of an educated speaker.
		- Marvin Minsky: 0.2M waking hours between birth and age 21. Assuming 4 new concepts per hour, then 0.8M concepts.
		- There are about 1 trillion brain cells. Assuming each brain cell is responsible for a one-step inference between two concepts, then there are 1M concepts.
- ✅Silicon babies (1991) [@wallichSiliconBabies1991]
	- At that point, it will be able to pick up new knowledge more readily by read ing than by having knowledge engineers spoon-feed it. A wider information base may also save eyc from such gaffe s as concluding (from everybody it knew about) that all humans in the world are friends of Doug Lenat.
	- Cyc is "kitchen-sink engineering".
	- asserted in two different forms : first in clean and elegant " epistemological language" and again at the heuristic level in "a grab bag of different representations " that are designed to make inference faster for a particular class of facts.
- ✅The evolution of CycL, the Cyc representation language (1991): >1M assertions. 10M assertions needed,
  collapsed:: true
	- CycL, the representation language underlying Cyc, began life as a frame-based language. This was back in September of 1984, when we embarked on the ten-year mission of codifying and representing what we believed to be the 1 million pieces of common sense knowledge.
	- We soon had to raise that "1 million" estimate by an order of magnitude, which is good since we're already over the 1 million mark as far as number of assertions in Cyc. Luckily we're entering information much faster than predicted, which cancels out that previous error. And our organization of knowledge in Cyc's KB has changed violently, over and over, and only began stabilizing around 1987-88, after years of ontological "hacking."
	- a Cyc-based natural language understanding program is a knowledge base about language and communication, encoded in CycL.
	- The trilemma essentially due to Godel's incompleteness: efficient inference, expressive language, complete inference. Cyc chose efficiency (usually runs quickly) and expressivity (it uses a second-order logic, which can express basically everything you want), giving up completeness of its inference engine (sometimes inference times out).
	- Why did it have to change so drastically? Cyc project began with RLL, the same language that EURISKO used. They thought it would all work out, because all the pieces "worked", or rather,
	  collapsed:: true
		- each of the documented features worked, at least once, in some demo, though few of them worked simultaneously, or repeatably, or on a wide range of problems. This "sort of" level of implementation was not limited to Stanford, or the 80's, of course; one could point one's finger at SHRDLU, HACKER,... well, you get the idea, and, as I've already remarked, I was as guilty as anyone of this sloppiness. Living in this never-never land of semi-implemented systems has certain advantages (it lets you expound, and cling to, elegant theories of knowledge and intelligent action.) This is what Aristotle did with physics; it's what we're still able to do with religion. Things get ever so much uglier if you let data intrude.
- Guha, Ramanathan V. Contexts: a formalization and some applications. PhD thesis, Stanford University, 1992.
	-
- ✅Guha, Ramanathan V., and Douglas B. Lenat. "Re: CycLing paper reviews." *Artificial Intelligence* 61.1 (1993): 149-174. [@guhaReCycLingPaper1993]: >1M assertions, >30 inference engines. takes 180 hours to learn.
  collapsed:: true
	- McDermott says "the formalists are pushing through the same swamp ... a few meters ahead". But we have little confidence that the theoreticians know what's important, that they're pushing in the right direction, given that they only try to use their formalisms on toy problems. Ntis Nilsson recently [20] provided what is perhaps a more accurate metaphorical characterization of our effort, in which we are the "discoverers '~ and the formalists are the "colonists" following along behind, years later.
	- Today, our methodology for ontological engineering starts with a global plan, scheduling dozens of micro-theories (e.g., daily human activities, the weather, human-occupied constructs) we will be entering over the coming year, and sketching their interdependencies. One or two very experienced individuals then produce an account, in English, of the scope of a theory to be worked on next. Other project members flesh out that account, still in English, and restate each sentence at the right level of generality. Half a dozen knowledge enterers then work to identify any concepts (collections, predicates, etc.) which are absent from Cyc but which are needed to express this knowledge. Finally, teams (usually of size 2) of knowledge enterers finish axiomatizing the knowledge, entering it into Cyc, and (often using a "tiger-team" approach) testing and reviewing it. This methodology continues to evolve, partly as a result of our learning more about the process, and partly as a result of Cyc learning more (and hence being increasingly able to actively help with the knowledge entering process.)
	- more than half of the useful knowledge in Cyc was entered during the past 18 months.
	- CycL
		- Cyc's representation language, CycL, has significantly evolved in the years since the book was written.
		- Reasoning by argumentation--a mechanism central to CycL's doing default reasoning--was barely hinted at in the book. The old scheme, involving numeric certainty factors, was found to be inadequate, and was scrapped when the book was almost finished, and several sections had to be hastily amended.
		- The need for expressive power has mutated the representation so far from the vanilla frame-based language of its origins as to be almost unrecognizable. Those "needs" included disjunctions, negation, universal and existential quantification, etc., which led us (admittedly unwillingly) to something like first-order predicate calculus. Our unhappiness over this inexorable transformation was due to the fact that most systems which use first-order predicate calculus as a representation language also happen to use general theorem proving as their inference "engine"--and that leads to intolerably slow and combinatorially explosive behavior even with moderately small sets of axioms.
	- there are currently well over a million such axioms in the Cyc knowledge base; by the time you read these words, there will probably be over two million
	- The point is that we (people and programs) need only pursue heuristic completeness--i.e., the ability to (usually) efficiently draw those inferences that an application demands
	- identified (and implemented) over 30 different inference schemas, that together cover almost all of the couple of million of assertions anyone's ever made to Cyc, and yet are specific enough that they admit significant optimizations for inference, for truth maintenance, etc. Some of these "inference engines" are familiar schemas (inheritance and automatic classification), some less so (e.g., determinations and transfersThrough, which is akin to). These are encapsulated as separate modules at the Heuristic Level; a translator recognizes when a module can be called upon, adjudicates which module to invoke in case of multiple ones being triggered, and then, after one or more modules return answers. lifts or transforms it back into normal CycL form. Of course this goes on recursively, so various different Heuristic Level modules might be called, many times, in the course of answering a single Epistemological Level query.
	- project management
		- Cyc has never received a penny of government funding, let alone a large share of it. Since its inception in 1984, the project has been supported entirely by a consortium of American companies.
		- In 1991, we offered [to the SRKB group, on Internet] to make parts of the Cyc knowledge base available--in KIF interlingua format--to that community of "Shared Reusable Knowledge Base" researchers. We encouraged them to use it in conducting experiments on knowledge sharing, or to use it as a substrate for knowledge sharing (as Sowa suggests). Interestingly, we had only one public and one private reply, the latter being a cynical (but, in hindsight, accurate) prediction that no one in that group would take us up on our offer, because that community was interested foremost in dictating standards, only secondarily in representation, and only incidentally in knowledge (which is what we were offering.)
	- application
		- In June, 1992, we held a month-long 9-hour-a-day every-day immersion course in Cyc, primarily for the benefit of our new knowledge enterers and collaborators. That is the magnitude of the effort required at present, to come up to speed on Cyc. Within one month, every single one of our dozen new knowledge enterers was working productively, representing new knowledge in CycL.
		- the most promising short-term uses of Cyc are not what are traditionally considered AI problems. Instead, they are in relatively "mundane" problems such as making spreadsheets smarter, providing better access to a heterogeneous set of databases, directed marketing of goods and services, etc.
	- ontological change
		- Over the years, there have been about five relatively major transitions, each of which has stopped the knowledge entry process for about a week--during which time we semi-automatically converted the old knowledge base to the new one. The last big change was the introduction of contexts; that occurred in the summer of 1990, when there were already over half a million assertions in the knowledge base.
		- Consider the following, which is an actual example of a high-level change in the ontology we made in 1991. We radically changed the way we handle RepresentedThing v e r s u s InternalMachineThing. All it meant was one "operation" that we had to perform--one assertion told to Cyc--followed by allowing the system to run for about eight hours to "assimilate" that magnitude of change. Back in 1988, a similar thing happened when we realized that Processes and Events were coextensional (even though ProcessType and EventType are not), and asserted that to Cyc.
- ✅[CYC Report -- V. Pratt](http://boole.stanford.edu/cyc.html) (1994-04-16): staff comprises 22 individuals at present (19 FTEs); we hope to staff up to over 30 soon, assuming that is we "stay in business" at MCC
  collapsed:: true
	- the typical knowledge enterer will work on a topic for several days, then enter several hundred axioms in a burst, in a day.
	- our staff size has gone up and down, but for the first 5 years in particular we had a much smaller staff.
- ✅✅Enabling agents to work together (1994) [@guhaEnablingAgentsWork1994]
	- The Syntax module can properly handle about 75% of the sentences found in the news stories of a typical issue of the newspaper USA Today. And in cases in which Cyc knows all the proper nouns in the sentence, the Semantics module can properly handle most of the sentences parsable by the syntax module... as good as what our knowledge enterers independently come up with, when asked to manually translate the material into CycL.
	- ```
	  1. The 30k constant terms
	  Categories
	      ---40%
	      Categories of categories - .5%
	      Categories of individuals - 39.58
	          Categories of Intangible objects -- 3%
	              C. of Information-Bearing Objects
	              C. of Numbers, C. of Physical attributes, etc.
	          Categories of Tangible objects --- 18%
	              C. of Living Things
	              C. of Artifacts
	                  C. of Things around the house
	                  C. of >Human-sized objects
	      Categories of Script types --- 15%
	          Actions by 1 "person"
	              Physiological Actions
	              Problem Solving/Planning
	              Work/Hobby/... Actions
	          Actions by >1 "person"
	              Rites of Passage
	              Communication
	          Natural Phenomena (e.g., Weather)
	  Predicates & Functions --- 15%
	      Unary: see Categories and Attributes
	      Binary -- 12%
	      Ternary -- 2%
	      Quaternary+ -- 1%
	  Attributes (a type of unary predicate) --- 10%
	  Lexical objects --- 15%
	      Words -- 14+8 (and growing)
	      Parts of Speech, Tense, Number, Gender,... -- <1f
	  Proper Nouns (Specific people, places, languages, events, etc.) -.- 15%
	  Microtheories (long-lived contexts) -- 1%
	  Misc. and Sundry --- 8%
	  
	  2. The distribution of formulae
	  Taxonomic information --- 25%
	          (including type constraints on predicates, etc.)
	  Partonomic relations --- 35%
	          what kind of parts physical/anatomical/subEvents...
	              might various types of objects have? -- 15%
	          what kind of actors are involved in
	              various script-types? ---15%
	  Lexical information --- 10%
	          Linguistic properties of different word senses -- 8%
	          Denotations of word senses -- 2%
	  More complex information interrelating script
	          types, people and tangible objects --- 10%
	  Generic topics (time, space, intentions, etc., stuff about numbers,...) -.- 10%
	  Information about specific people, places, etc. --- 5%
	  Misc. and sundry formulas --- 5%
	  ```
	-
- ✅[CYC-O](https://web.archive.org/web/20161221162628/https://www.wired.com/1994/04/cyc-o/) (1994-04-01): 4M assertions for priming, 40M assertions eventually.
  collapsed:: true
	- Initially, you thought 1 million rules seemed enough to capture common sense, then 2 million. Now, 4 million. Why has this changed? 
	  
	  We drastically underestimated how ambiguous humans are.
	- If I said I was following a ball of yarn into a labyrinth, would CYC know I felt like Theseus approaching the Minotaur?
	  
	  In 1997, yes. Today, no. CYC is finally becoming smart, but we need to correct the ignorance problem. There are 20 to 40 million things that have to be put in over the next decade, common knowledge – information in textbooks, encyclopedias, almanacs, in the newspaper, in literature, and so on.
	- They're philosophers, anthropologists, chemists, sociologists, professional musicians. They have the ability to introspect, to articulate clearly. Currently we have about two dozen people. We're not interested in what botanists know about plants, but what chemists and musicians know. That's common sense. Well, people have misconceptions, but nonspecialists in area X share misconceptions. We use those shared misconceptions in analogies and metaphors. If you met someone who really knew everything about everything, you'd probably have trouble communicating with him or her.
	- In the coming year, CYC will be out on Macintoshes and 486s. For the first few years, it's more likely that when you buy Excel, CYC will double-check spreadsheets, for instance. Once it figures out the meanings of the rows and columns, it can use its millions of rules to sanity-check contents. If someone lists a person as his spouse and that person lists a third as her spouse, that's sort of odd.
	- In two years, you could do an interview \[with Cyc\] you'd be very happy with, typing directly to it without a human sitting in the loop.
- ✅[David Whitten's unofficial Cyc FAQ](https://web.archive.org/web/20000816215346/http://www.robotwisdom.com/ai/cycfaq.html) (sometime before 1995): 400K assertions, <30K rules, 500 contexts
  collapsed:: true
	- The development of Cyc has been supported by several organizations, including Apple, Bellcore, DEC, DoD, Interval, Kodak, and Microsoft.
	- more than 400,000 significant assertions of which less than 30,000 are Rules (Inference IF THEN statement) There are currently over 500 MicroTheories (long lived contexts) defined within Cyc.
	  collapsed:: true
		- ```
		  The Constant terms
		  
		  40%     Categories
		      .5%    Categories of categories
		             Categories of individuals
		     3.0%       Categories of Intangible objects,Information Bearing
		                  objects, Numbers, and Physical attributes, etc.
		    18.5%       Categories of Tangible objects, Living Things, Artifacts
		    18.0%    Categories of Script types
		                Actions by one person : Physiological Actions, Problem Solving
		                  and Planning, Work/Hobby/etc Actions
		                Actions by more than one person : Communication, Rites of
		                  Passage, Trade and Commerce, etc.
		                Actions of Natural Phenomena (Weather etc)
		  15%     Predicates and Functions
		             Unary: see Categories and Attributes
		    12.0%    Binary
		     2.0%    Ternary
		     1.0%    Quaternary or more
		  10%     Attributes
		  15%     Lexical objects (words, parts of speech, tense, number, gender)
		  15%     Proper Nouns (specific people, places, languages, events, etc.)
		   1.5%   Microtheories (long lived contexts)
		   3.5%   Misc. and Sundry
		   
		  Rules or Formulae
		  
		  25%     Taxonomic Information (like type constraints on predicates)
		  35%     Partonomic relations
		       5%    general relationships
		      15%    what kind of parts physical/anatomical/subEvents might
		                various types of objects have?
		      15%    what kind of actors are involved in various script types?
		   5%     Information about specific people, places, etc.
		  10%     Lexical information
		       8%    linguistic properties of different word senses
		       2%    denotations of word senses
		  10%     More complex information interrelating script types, people and
		              tangible objects.
		  10%     General topics (time,space, intentions, stuff, numbers, etc)
		   5%     Misc. and sundry formulae
		  
		  
		  ```
	- Before 1991, CycL was primarily a frame-based language, the Cyc KB was thought of as a set of unit/slot/entry triples, and inferencing was done pretty much by inheritance.
	  collapsed:: true
		- This led to a set of increasingly baroque add-ons and work-arounds, such as encoding higher-arity predicates as entries which were tuples, having variant forms of predicates (in which the only difference was the order of the arguments), and placing more and more stress on frame-oriented editing interfaces to navigate around in the knowledge base.
	- The Cyc team now thinks of the Cyc KB as a "sea" of assertions, with each assertion being no more "about" its first argument than its last one.
	  collapsed:: true
		- For example, if one says that Fred is Sally's father, this is now regarded as being just as much a statement "about" Sally as Fred. Inference has broadened out into general logical deduction, with AI's well-known named inference engines (such as inheritance, automatic classification, etc.) just special cases that might or might not get treated specially in any particular implementation of the Cyc system; but in any event the persons entering knowledge do not need to cater to that, or even know about it. So one way to visualize the Cyc KB is as a circle filled with assertions; a circular "assertion sea". Above this sea (or outside it, from a two-dimensional perspective) sit all the "constants". Attached to each constant is a bundle of thin wires or strings. The other ends are attached to all the assertions, in the sea, that mention that constant anywhere. Moreover, each of the assertions in the sea can itself be treated as a constant, if you want, and have its own wires reaching to other assertions which mention it.
	- Inference rules in Cyc can now be thought of as ways of saying that if you have certain assertions in the sea (a set of them, that match a certain pattern) then you are justified in adding a particular new assertion.
	  collapsed:: true
		- Each time an assertion is added, wires are automatically strung to all the constants that are mentioned anywhere inside the assertion, and "ripples" of its adding may cause yet other inferences to occur, yet other new assertions to get dumped into the sea, etc. Sometimes one of the new assertions is the answer someone was waiting for, for some problem; sometimes one of the inference procedures reaches a contradiction and has to cope with that.
	- CycL, the Cyc representation language, is essentially a form of First Order Predicate Calculus (FOPC) with equality, augmentations for default reasoning, skolemization, and some second-order features (e.g., quantification over predicates is allowed in some circumstances). Like FOPC, CycL allows using ForAll (universal quantification), ThereExists (existential quantification), and LogImplication (material implication), as well as the other common ways of combining variables and logical expressions such as LogAnd (conjunction), LogOr (disjunction), and LogNot (negation). It uses a form of circumscription, includes the unique names assumption, and can make use of the closed world assumption where appropriate.
	- It is not expected that the Cyc program will pass the Turing Test in the near future.
	- Since the SQL model presumes a relational abstraction consisting of tables with rows and columns, it does not translate well into the Sea of Assertions abstraction (or even the older Frame based abstraction). The Cyc model is much richer than the SQL model
- ✅"Very large knowledge bases-architecture vs engineering" (1995): already spent over 100 person-years. Expect up to 1000 person-years.
  collapsed:: true
	- several person-centuries needed
	- have invested well over a person-century since the C Y C project began in 1984
- ✅[Artificial Intelligence (1995-09)](https://www.jstor.org/stable/24981725): 100K concepts, 1M assertions.
  collapsed:: true
	- Douglas B. Lenat
	  Scientific American, Vol. 273, No. 3 (September 1995), pp. 80-82 (3 pages)
	- During the coming decade, researchers will flesh out CYC’s base of shared knowledge by both manual and automated means. They will also begin to build applications, embedding com mon sense in familiar sorts of software appliances, such as spreadsheets, data bases, document preparation systems and on-line search agents.
	- After initial gains led to high expectations during the late 1970s and early 1980s, there was a bitter backlash against AI in both industry and govern- ment. Ironically, 11 years ago, just as the mania was at its peak, I wrote an article for in which I dared to be fairly pessimistic about the coming de- cade. And now that the world has all but given up on the AI dream, I believe that artificial intelligence stands on the brink of success. My dire predictions arose because the programs that fueled AI hype were not savants but idiot savants. These so-called expert systems were often right, in the specific areas for which they had been built, but they were extremely brittle. Given even a simple problem just slightly beyond their expertise, they would usually get a wrong answer.
	- The breadth of CYC’s knowledge is evident even in a simple data retrieval application we built in 1994, which fetches images whose descriptions match the criteria a user selects. In re- sponse to a request for pictures con- taining seated people, CYC was able to locate this caption: “There are some cars. They are on a street. There are some trees on the side of the street. They are shedding their leaves. Some of them are yellow taxicabs. The New York City skyline is in the background. It is sunny.” The program then used its formalized common sense about cars— they have a driver’s seat, and cars in motion are generally being driven—to infer that there was a good chance the image was relevant. Similarly, CYC could parse the request “Show me happy peo- ple” and deliver a picture whose caption reads, “A man watching his daughter learn to walk.” None of the words are synonymous or even closely related, but a little common sense makes it easy to find the connection.
- ✅CYC: A large-scale investment in knowledge infrastructure (1995): CycL by 1993 had become fully higher-order logic, since the previous frame-based language was not enough. 1M assertions, 100K concepts. probably primed by 2005.
  collapsed:: true
	- our hopes for NLU and ML in the next 10 years are very high
- [DUELING BRAINSCAPES IN ARTIFICIAL INTELLIGENCE](https://web.archive.org/web/20031224235959/http://businessweek.com/1997/25/b353210.htm) (1997-06-23): 2M assertions. Already cost $40M. Autonomous research by 2020.
	- The flip side of the AI coin can be found in Texas. Meet Cyc (from encyclopedia), the most ambitious version of the old-school, top-down system. Some $40 million has been spent on organizing Cyc's reasoning ''engines'' and stuffing its knowledge base with a half-million rules derived from 2 million common-sense facts.
	- Cycorp has turned a modest profit each year on annual revenues and research contracts of about $3 million.
	- By 2020, Lenat hopes Cyc will be ready to take charge of its own research lab. He expects Cyc to design unique experiments and uncover new knowledge.
- ✅✅From 2001 to 2001: Common Sense and the Mind of HAL (1998)
	- Often I'd find it in a mode best described as "dead." Sometime during the night, EURISKO would decide that the best thing to do was to commit suicide and shut itself off. More precisely, it modified its own judgmental rules in a way that valued "making no errors at all" as highly as "making productive new discoveries." As soon as EURISKO did this, it found it could successfully meet its new goal by doing nothing at all for the rest of the night... I eventually had to add a new heuristic to EURISKO-one it couldn't modify in any way-to explicitly forbid this sort of suicide.
	  
	  [@HALsLegacy2001s1998, page 194]
	- For many years, we were largely driven by bottom-up examples of this sort from encyclopedias, newspapers, novels, advertisements, and so on. Gradually, around 1990, we began to work in a more top-down fashion, treating entire topics one at a time and in moderate detail. By 1996, we had told Cyc about hundreds of topics. That brings up the next issue.
	  
	  [@HALsLegacy2001s1998, page 205]
	- Our knowledge enterers talk to Cyc in the clean, expressive language (EL). Their input is then converted into the heuristic language (HL), which is efficient for dealing with many sorts of frequently recurring inference problems, such as reasoning about time, causality, containment, and so forth.
	- The third, and perhaps most important lesson we learned along the way was that it was foolhardy to try to maintain consistency in one huge flat Cyc knowledge base. We eventually carved it up into hundreds of contexts or microtheories. Each one of those is consistent with itself, but there can be contradictions among them.
- ✅The DARPA high-performance knowledge bases project (1998): about 40 engines.
  collapsed:: true
	- The CYC inference engine comprises an epistemological and a heuristic level.
	- The epistemological level is an expressive nth-order logical language with clean formal semantics.
	- The heuristic level is a set of some three dozen special-purpose modules that each contains its own algorithms and data structures and can recognize and handle some commonly occurring sorts of inference.
	- For example, one heuristic-level module handles temporal reasoning efficiently by converting temporal relations into a before-and-after graph and then doing graph searching rather than theorem proving to derive an answer.
	- A truth maintenance system and an argumentation-based explanation and justification system are tightly integrated into the system and are efficient enough to be in operation at all times.
	- In addition to these inference engines, CYC includes numerous browsers, editors, and consistency checkers. A rich interface has been defined.
- [Artificial intelligence gets real](https://www.forbes.com/global/1998/1130/0118096a.html) (1998-11-30): AGI by 2025.
- [Cycorp to release some 'common sense' software](https://web.archive.org/web/20010405071717/http://www.cyc.com/austinstatesman03072001.html) (2001-03-07): 87 employeees. ready to commercialize. raised $15M to support two commercial products (CycSecure, intranet search). Already cost 500 person-years, $45M.
  collapsed:: true
	- After 17 years of technology development, Austin-based Cycorp Inc. is ready to commercialize its artificial intelligence software and take a shot at making money.
	  
	  Cycorp said Tuesday it will release part of its Common Sense Knowledge Base software to the public in July in an effort to create a broader base of developers to use and expand on its technology.
	  
	  The public part of the software will be called OpenCyc and will be regulated by an independent group the company is forming, called OpenCyc.org.
	  
	  At the same time, the company said it is close to raising a $15 million first round of backing to support two commercial products aimed at computer network security and sophisticated Internet and intranet search engines.
	- If all goes as planned, the company, which employs 82 people in Northwest Austin, may grow to 120 workers by the end of this year.
	- The Defense Advanced Research Projects Agency is enthusiastic about the Cyc concept. Cycorp has done considerable research for the agency's Rapid Knowledge Formation Project. Program manager Murray Burke said the agency's project will create "a new generation of intelligent applications for the military" and "could enable a new generation of intelligent knowledge management applications for business and commerce."
- ✅[Birth of a Thinking Machine (2001-06-21)](https://web.archive.org/web/20191213220632/https://www.latimes.com/archives/la-xpm-2001-jun-21-mn-12881-story.html) [@hiltzikBirthThinkingMachine2001]: 500 person-year, 1.4M assertions. $50M (from the Defense Department, GlaxoSmithKline, Paul Allen, etc), 65 staff, includes about 20 philosophers and smaller teams of experts in subjects ranging from theology to physics.
  collapsed:: true
	- has consumed an estimated 500 person-years and $50 million in investments from, among others, the Defense Department, the pharmaceuticals company GlaxoSmithKline, and Microsoft co-founder Paul Allen.
	- Cycorp’s 65-member staff
	  collapsed:: true
		- The staff includes about 20 philosophers and smaller teams of experts in subjects ranging from theology to physics.
		- Among them is Charles Klein, 33, a University of Virginia-trained metaphysician who joined Cycorp in 1999 after finding its want-ad for “ontological engineers” in a meager professional quarterly called Jobs for Philosophers.
	- The system today encompasses more than 1.4 million assertions--hundreds of thousands of root words, names, descriptions, abstract concepts, and a method of making inferences
	- As a software program, Cyc is not embodied in any physical thing: A visitor to Cycorp would see only cubicles filled with programmers contemplating conventional computer monitors displaying Cyc’s “knowledge.”
	- An intelligent system on this scale, Cycorp officials contend, has countless potentially profitable applications. “My vision of this company is to be the Intel of intelligent software,” says Dwight Lodge, chief executive of Cycorp. “I’d like to have [Cyc inside] a whole range of existing applications.”
	- Expert systems were “not savants, but idiot savants,” he said.
	- “Cyc already knows that people have to be a certain age before they’re hired for a job,” Lenat says, meaning that it could clear such inaccurate entries as mistaken birth dates from corporate payroll records. Cyc also can extract and compile facts scattered among diverse sources of information and use them to draw conclusions--in one test responding to a request for an image of people relaxing by turning up a photo of some men holding surfboards.
	- Lenat believes Cyc is much closer to fulfilling the role of an intelligent system that augments human capabilities, which after all is the central goal of AI research. “Once you have a truly massive amount of information integrated as knowledge, then the human-software system will be superhuman,” Lenat says, “in the same sense that mankind with writing is superhuman compared to mankind before writing.”
- ✅[Thompson, Clive. "The know-it-all machine." *Lingua Franca* 11.6 (2001-09).](https://web.archive.org/web/20121018030725/http://cyc.com/cyc/company/news/know_it_all) [@thompsonKnowItAllMachine2001]: 1.5M assertions, as soon as Cyc opens to the Internet in 2001, there would be thousands of people joining in, and by 2011, Cyc would "know all there is to know" and must extend the knowledge frontier by doing novel experiments.
  collapsed:: true
	- ~1.5 million assertions.
	- "Doug's really one of the only people still trying to slay the AI dragon," says Bill Andersen, a Ph.D. candidate specializing in ontologies (information hierarchies) at the University of Maryland and a former Department of Defense researcher who has used Cyc in several Defense Department experiments.
	- Incensing his critics, Lenat has published almost no academic papers on Cyc in recent years, raising suspicions that it may have many undisclosed flaws. "We don't really know what's going on inside it, because he doesn't show anyone," complains Doug Skuce, an AI researcher at the University of Ottawa.
	- Lenat, meanwhile, revels in his bad-boy image. He accuses academic AI experts of being theory-obsessed and unwilling to do the hard work necessary to tackle common sense. "They want it to be easy. There are people who'd rather talk about doing it than actually do it," he says, laughing.
	- by the 1970s, most researchers had concluded that learning was a hopelessly difficult problem, and were beginning to give up on the dream of a truly human, HAL-like program. "A lot of people got very discouraged," admits John McCarthy, a pioneer in early AI. "Many of them just gave up."
	  Undeterred, Lenat spent eight years of Ph.D. work -- and his first few years as a professor at Stanford in the late 1970s and early 1980s -- trying to craft programs that would autonomously "discover" new mathematical concepts, among other things.
	- Meanwhile, most of his colleagues turned their attention to creating limited, task-specific systems that were programmed to "know" everything that was relevant to, say, monitoring and regulating elevator movement. But even the best of these expert systems are prone to what AI theorists call "brittleness"... "People kept banging their heads against this same brick wall of not having this common sense," Lenat says.
	- By 1983, however, Lenat had become convinced that commonsense AI was possible -- but only if someone were willing to bite the bullet and codify all common knowledge by brute force: sitting down and writing it out, fact by fact by fact. After conferring with MIT's AI maven Marvin Minsky and Apple Computer's high-tech thinker Alan Kay, Lenat estimated the project would take tens of millions of dollars and twenty years to complete.
	- He'd be middle-aged by the time he could even figure out if he was going to fail. He estimated he had only between a 10 and 20 percent chance of success. "It was just barely doable," he says.
	- But that slim chance was enough to capture the imagination of Admiral Bobby Inman, a former director of the National Security Agency and head of the Microelectronics and Computer Technology Corporation (MCC), an early high-tech consortium... Inman invited Lenat to work at MCC and develop commonsense AI for the private sector.
	- How it began: Trying to get Cyc to fully understand "Napoleon died in 1821. Wellington was greatly saddened.". "We took enormous pieces of white paper," Lenat remembers, "and filled walls, maybe 150 feet long by about 8 feet high, with little notes and circles and arrows and whatnot."
	  collapsed:: true
		- LENAT BEGAN building Cyc by setting himself a seemingly modest challenge. He picked a pair of test sentences that Cyc would eventually have to understand: "Napoleon died in 1821. Wellington was greatly saddened." To comprehend them, Cyc would need to grasp such basic concepts as death, time, warfare, and France, as well as the sometimes counterintuitive aspects of human emotion, such as why Wellington would be saddened by his enemy's demise. Lenat and a few collaborators began writing these concepts down and constructing a huge branching-tree chart to connect them. They produced a gigantic list of axiomatic statements -- fundamental assumptions -- that described each concept in Cyc's database: its properties, how it interacted with other things.
		- "We took enormous pieces of white paper," Lenat remembers, "and filled walls, maybe 150 feet long by about 8 feet high, with little notes and circles and arrows and whatnot."
	- BY THE EARLY 1990s, Cyc had acquired hundreds of thousands of facts about the world and could already produce some startlingly powerful results. For example, Cyc could search through databases to find inconsistent information, such as twins who were listed with different birth dates. Cyc didn't need to be specially programmed to look for that sort of error -- it just "knew" the commonsense idea that twins are always the same age. Pleased with Cyc's progress, Lenat spun his venture off from MCC to form Cycorp, a free-standing company.
	- Aristotle's bronze-statue strikes again
	  collapsed:: true
		- A few months ago, for instance, Charles Klein, Cycorp's thirty-three-year-old director of ontological engineering, was asking Cyc a few test questions when he discovered something odd. Cyc apparently believed that if a bronze statue were melted into slag, it would remain a statue. What had gone wrong? Why was Cyc making such a basic mistake?  After a bit of forensic work, Klein found the problem. The Cyclists hadn't completely distinguished the concepts of bronze and statue. Cyc had been told that bronze was a material that retained its essential property -- its "bronzeness," as it were -- no matter what state it was in, solid or liquid. But now Cyc was trying to apply that fact to the statue aspect of "bronze statue." Cyc hadn't been told anything about statues that would invalidate its conclusion; nobody had ever thought it necessary to tell Cyc, for example, that statues are only statues if they're more or less in their original form. It's common sense, sure -- but who would bother to meditate on it? "Trying to think of everything," Klein quips, "is quite daunting."
	- Objections: Some argued he's trying to do ontological engineering when nobody knows what ontology *is* in theory. Some disliked his secretiveness. Lenat shot back that academia has rejected *him*.
	  collapsed:: true
		- In a 1993 issue of Artificial Intelligence, several reviewers sharply critiqued Lenat's 1989 book about Cyc. Yale's Drew McDermott led the charge, arguing that it was impossible to build a commonsense database without solving such philosophical problems as "the nature of causality." "We've been thinking about things like that for millennia," he points out.
		- McDermott suspects that it may not yet be possible to represent real-world common knowledge in logical, orderly languages such as Cyc's CycL -- or any other language, for that matter. After all, humans don't always store and manipulate knowledge logically or in language. "If you go through a room and you don't bump into things, is that common sense?" he wonders. Nils Nilsson, an AI pioneer and Stanford professor emeritus, shares that concern. "You can describe in words how to swing a golf club," he concedes. "But can that really tell you how to do it? We still don't really know how to represent knowledge."
		- Compounding this resentment is the fact that in the world of large-scale knowledge bases, Cyc is the biggest -- perhaps the only -- game in town. As a result, some academics worry that Cyc's example discourages other AI researchers from building competing knowledge bases. Lenat's seventeen years of painstaking labor has shown exactly how difficult and involved the project is. For his part, Lenat quietly relishes the monopoly he has on commonsense knowledge. Some of his funders, including the Department of Defense and GlaxoSmithKline, already use experimental versions of Cyc to help "scrub" data in databases, cleaning out data-entry errors. Ultimately Lenat hopes to license Cyc to all software makers worldwide -- as a layer of intelligence that will make their systems less brittle. It could become like "Intel inside," he suggests, or the Microsoft Windows of the AI world.
		- In the meantime, Lenat cheerily admits to having "almost no relationship" with the academic world. It has rejected him, he argues -- not the other way around. Ten years ago, he sent some of his staff to speak, on invitation, at a major academic conference on common sense. Their papers were "really practical stuff," he says. "All this really hard-core work we'd done on how to represent knowledge about concepts like fluids and countries and people." But the conference organizers confined the Cyc papers and speakers to a single panel, Lenat recalls, and few people showed up. "It was like they'd rather talk about doing things than actually hear from people who are doing things," he complains.
	- future: as soon as Cyc opens to the Internet in 2001, there would be thousands of people joining in, and by 2011, Cyc would "know all there is to know".
	  collapsed:: true
		- He draws me a graph that shows Cyc's learning curve. From 1985 to 2000, the line curves upward gradually -- the "brain surgery" phase during which the Cyclists input knowledge by hand. But then at 2001, the curve steepens dramatically as the open-source phase takes over, and thousands -- or millions -- more inputters join in. Lenat extends the curve maybe ten years into the future. As the curve reaches the point where Cyc has read everything there is to read and spoken with everyone willing to tell it facts, it will begin to flatten out. "It'll know all there is to know," he says. "At that point, the only way it could learn more is by doing experiments itself."
- ✅[On Magazine.com -- ON Magazine -- Get Smart](https://web.archive.org/web/20021028004118/http://www.onmagazine.com/on-mag/magazine/article/0,9985,36936-2,00.html) (2001-11-02): John McCarthy wrote the test sentence pair "Napoleon died on St. Helena. Wellington was greatly saddened."
  collapsed:: true
	- John McCarthy occasionally advised Lenat on the project. McCarthy is a professor of computer science at Stanford and a founding father of the field. He is famous for, among many accomplishments, coining the term artificial intelligence. He helped focus the group's efforts by formulating a pair of test sentences: "Napoleon died on St. Helena. Wellington was greatly saddened."
- ✅✅[Cyc in use - Computerworld](https://web.archive.org/web/20021113022542/http://www.computerworld.com/industrytopics/defense/story/0,10801,69848,00.html) (2002-04-08): CycSecure
	- CycSecure taps into a variety of sources, including the U.S. Department of Defense's Information Assurance Vulnerability Assessment notification program, to keep up to date on all known ways a system can be attacked. It also knows about the military command's computers and networks and combines that knowledge with the vulnerability information to simulate network attacks. When it spots a potential vulnerability in a computer, it can go out to that box to determine whether it is in fact vulnerable and then recommend the appropriate patch.
- ✅[Computerizing Common Sense - Computerworld](https://web.archive.org/web/20021019152738/http://www.computerworld.com/news/2002/story/0,11280,69881,00.html) (2002-04-08): 600 person-years, 3M rules, 300K concepts. Planned to "migrate everything to the public mode. But OpenCyc will always lag by 24 to 30 months." Finally knew enough to be "tutored" in 2001. Expect 10M assertions/yr contributed by the public, and 100M assertions in total by 2007, reaching the level of a human. [@anthesComputerizingCommonSense2002]
  collapsed:: true
	- We've put in 600 person-years of effort, and we've assembled a knowledge base containing 3 million rules of thumb that the average person knows about the world, plus about 300,000 terms or concepts.
	- **What is OpenCyc?** It's a daring gamble to gradually make everything in the Cyc knowledge base public. An initial release last week made available about 5,000 concepts and 50,000 axioms or assertions about them. We will gradually, over the next two years, migrate everything to the public mode. But OpenCyc will always lag by 24 to 30 months.
	- **Are you continuing to add to Cyc?** Yes. Cyc finally knows enough that it can actually help with the knowledge-entry process. It's changed in the past year from where we were entering these things by hand and writing them in logic to a kind of tutoring mode. For example, you say, "I want to tell you about a new kind of bacteria," and it might say, "What kinds of things does it kill? Is it similar to anything I know about already?" Up until now, the only people adding knowledge were a small priesthood of logicians. Now, suddenly, millions of people can add their knowledge to Cyc. Because of the acceleration, we'll be at 10 million assertions a year from now.
	- Up until now, the only people adding knowledge were a small priesthood of logicians. Now, suddenly, millions of people can add their knowledge to Cyc. Because of the acceleration, we'll be at 10 million assertions a year from now.
	- A typical person knows about 100 million things about the world. I see us crossing that point in five years. It's difficult to predict the course thereafter.
- ✅[Computer to Save World?](https://web.archive.org/web/20150905165226/http://www.cyc.com/about/media-coverage/computer-save-world/) (2002-06-07): 1.4M statements, ~700 MB, opened to the Internet in 2002 Spring. Was working at Lycos for disambiguation, but ended. Lenat: “This is the most exciting time we’ve ever seen with the project. We stand on the threshold of success. What people are able to do on a day-by-day basis could be dramatically increased if we are successful.”
  collapsed:: true
	- They have been feeding a database named Cyc 1.4 million truths and generalities about daily life
	- This spring Cycorp Inc. creaed a Web link to let the public download Cyc’s knowledge base and teach it things. Doug Lenat believes that if enough people log in to share more of the world’s collective wisdom, Cyc quickly will become vastly more useful. For now, Cyc is just a few hundred megabytes that can be stored on a single CD. Someday, Lenat envisions it becoming standard equipment in computers or being placed on a network server to fuel dozens of applications. It could annotate e-mails to put them in better context for their recipients, serve as an instant language translator, even offer humans advice from varying points of view.
	- Lenat: “This is the most exciting time we’ve ever seen with the project. We stand on the threshold of success. What people are able to do on a day-by-day basis could be dramatically increased if we are successful.”
	- The researchers also told Cyc to ask questions if it decides it needs more clarity about a concept. In 1986 Cyc asked whether it was human. That same year it asked whether any other computers were engaged in such a project.
	- Lenat’s team taught Cyc to make sure everything it was told conformed with everything it already knew — a protection that should keep Cyc from being filled with erroneous information during its public education, which for now is possible only on computers with the Linux operating system... Ask Cyc whether al-Qaida might possess anthrax, and it will tell you it presumes you are not referring to the heavy-metal band Anthrax.
	- Rather than distract the 60 employees — known as Cyclists — from their mission to make Cyc a gift to the world, Cycorp makes no sales calls, no pitches to investors, no press releases.
	- Cycorp has been profitable from inception, funded by the government, private investors and side projects such as the Lycos search-engine deal.
	- Job at Lycos: make sense of ambiguous search results. The job ended in 2001.
	  collapsed:: true
		- If a user entered “vets,” Cyc would ask whether he meant veterinarians or veterans and then have appropriate follow-up questions.
		- It learned about sex-related terms users typed into the search engine. Cyc’s programmers taught it that certain things in the world are salacious and shouldn’t be mentioned in everyday applications. The job ended because of turnover at Lycos after it was bought by Terra Networks. Cyc showed promise and could be brought back, though it can’t improve search engines all by itself, said Tom Wilde, Terra Lycos’ general manager of search services.
- ✅Terrorism Knowledge Base (2002)
  collapsed:: true
	- For the past 18 months, we have been building the comprehensive Terrorism Knowledge Base TM (TKB TM). The TKB will ultimately contain all relevant knowledge (beginning with unclassified knowledge) about terrorist groups, their members, leaders, ideology, founders, sponsors, affiliations, facilities, locations, finances, capabilities, intentions, behaviors, tactics, and full descriptions of specific terrorist events. Led by world-class experts in terrorism supplied by SAIC, knowledge enterers have been building the TKB at the rate of up to 100 assertions per person-hour.
	- The TKB effort has so far added to the Cyc KB knowledge of over 2000 terrorists, over 700 terrorist groups and over 6500 terrorist attacks. The representations of these individuals, groups and events are involved in over 200,000 TKB assertions such as “Xavier Djaffor participated in the Jihad from 1996 to 2000” and “Lashkar-e-Taiba is an Islamist terror group founded in 1990”.
	- ![image.png](./assets/image_1734155060683_0.png){:height 577, :width 748}
- ✅[IOL : Computer boffins pop AI's $60m question](https://web.archive.org/web/20120502151103/http://www.opencyc.org/cyc/company/news/APArticle060902) (2002-06-09): The military, which has invested $25-million in Cyc, is testing it as an intelligence tool in the war against terrorism. "This is the most exciting time we've ever seen with the project. We stand on the threshold of success."
  collapsed:: true
	- The military, which has invested $25-million in Cyc, is testing it as an intelligence tool in the war against terrorism.
	- "This is the most exciting time we've ever seen with the project. We stand on the threshold of success."
	- Lenat's team taught Cyc to make sure everything it was told conformed with everything it already knew - a protection that should keep Cyc from being filled with erroneous information during its public education, which for now is possible only on computers with the Linux operating system.
	- Cycorp was spun off in 1994 into a privately held company that Lenat says has been profitable from inception, funded by the government, private investors and side projects such as the Lycos search-engine deal, which ended last year.
	- Cyc's job at Lycos was to make sense of ambiguous search results. If a user entered "vets", Cyc would ask whether he meant veterinarians or veterans and then have appropriate follow-up questions.
	- Amusingly, the Lycos stint provided Cyc with an adolescence, because it learned about sex-related terms users typed into the search engine. Cyc's programmers taught it that certain things in the world are salacious and shouldn't be mentioned in everyday applications.
- ✅[Wise Up, Dumb Machine](https://stanfordmag.org/contents/wise-up-dumb-machine) (2002-04): $60 million and 600 person-years, 1.5 million assertions
  collapsed:: true
	- $60 million and 600 person-years
	  collapsed:: true
		- from programmers, philosophers and others—collectively known as Cyclists.
	- 1.5 million assertions
	- Cycorp has contracts with the Defense Department and companies like SmithKlineGlaxo, and it easily won a 1998 Defense competition for intelligent databases. Another test should come sometime this year with the release of OpenCyc, the free, open-source version containing about 60,000 core assertions and 5,000 core concepts. Anyone will be able to download a copy, and that will enable Cyc to start learning from conversations with people in the outside world. That’s a big step, but Cyc is 18 years old. About time it got away from home.
	- Another test should come sometime this year with the release of OpenCyc, the free, open-source version containing about 60,000 core assertions and 5,000 core concepts. Anyone will be able to download a copy, and that will enable Cyc to start learning from conversations with people in the outside world. That’s a big step, but Cyc is 18 years old. About time it got away from home.
- ❌Semantic knowledge source integration: a progress report (2003)
- ✅[A veritable cognitive mind (2003-07-28)](https://web.archive.org/web/20121019032918/http://eetimes.com/electronics-news/4044922/A-veritable-cognitive-mind): 1M rules
  collapsed:: true
	- One group hot on the trail of Minsky's vision of common sense is spearheaded by Doug Lenat, a former professor at Carnegie-Mellon and Stanford Universities who is now president of Cycorp, maker of the Cyc (pronounced "psych") knowledge base. Since 1984, Cyc has accumulated 1 million rules in its knowledge base of common sense. According to Lenat, Cycorp's stated goal is to "break the software brittleness bottleneck once and for all by constructing a foundation of basic common-sense knowledge-a semantic substratum of terms, rules and relations, a deep layer of understanding that can be used by other programs to make them more flexible."
- ✅✅[@baardAIFounderBlasts2003]
  collapsed:: true
	- "AI has been brain-dead since the 1970s," said AI guru Marvin Minsky in a recent speech at Boston University.
	- Minsky has spent much of his career studying "commonsense reasoning" – the ability of a computer to grasp the everyday assumptions that human beings take for granted.
	- Unfortunately, the strategies most popular among AI researchers in the 1980s have come to a dead end, Minsky said. So-called "expert systems," which emulated human expertise within tightly defined subject areas like law and medicine, could match users' queries to relevant diagnoses, papers and abstracts, yet they could not learn concepts that most children know by the time they are 3 years old.
	- "For each different kind of problem, the construction of expert systems had to start all over again, because they didn't accumulate common-sense knowledge."
	- Only one researcher has committed himself to the colossal task of building a comprehensive common-sense reasoning system, according to Minsky. Douglas Lenat, through his Cyc project, has directed the line-by-line entry of more than 1 million rules into a commonsense knowledge base.
	- "The worst fad has been these stupid little robots," said Minsky. "Graduate students are wasting 3 years of their lives soldering and repairing robots, instead of making them smart. It's really shocking."
	- "Marvin may have been leveling his criticism at me," said Rodney Brooks, director of the MIT Artificial Intelligence Lab, who acknowledged that much of the facility's research is robot-centered.
- ✅[A.I. Reboots | MIT Technology Review](https://www.technologyreview.com/2002/03/01/235213/ai-reboots/) (2002-03-01)
  collapsed:: true
	- its creator, the computer scientist Douglas B. Lenat, and his cadres of programmers have infused Cyc with 1.37 million assertions-including names, abstract concepts, descriptions and root words. They’ve also given Cyc a common-sense inference engine that allows it, for example, to distinguish among roughly 30 definitions of the word “in” (being in politics is different from being in a bus)... there is a palpable sense among A.I.’s faithful--themselves survivors of a long, cold research winter--that their science is on the verge of new breakthroughs. “I believe that in the next two years things will be dramatically changing,” says Lenat.
	- “Absolutely none of my work is based on a desire to understand how human cognition works,” says Lenat. “I don’t understand, and I don’t care to understand. It doesn’t matter to me how people think; the important thing is what we know, not how do we know it.”
	- “We don’t personalize Cyc,” says Charles Klein, a philosophy PhD from the University of Virginia who is one of Cycorp’s “ontologists.” “We’re pleased to see it computing commonsense outputs from abstract inputs, but we feel admiration toward it rather than warmth.”
- ❌[Survey of Knowledge Base Content (2002)](https://osebje.famnit.upr.si/~savnik/predmeti/PMJ/cyc-cont.pdf)
- ✅The Cyc® System: Notes on Architecture (2004): >2.5M assertions, 155K concepts.
  collapsed:: true
	- ![image.png](./assets/image_1734345153052_0.png)
	- At the time of writing, the full version of the KB contains over 2.5 million assertions (facts and rules) interrelating more than 155,000 concepts.
	- Most of the assertions in the KB are intended to capture “commonsense” knowledge pertaining to the objects and events of everyday human life, such as buying and selling, kinship relations, household appliances, eating, office buildings, vehicles, time, and space. The KB also contains highly specialized, “expert” knowledge in domains such as chemistry, biology, military organizations, diseases, and weapon systems, as well as the grammatical and lexical knowledge that enables the natural language processing (parsing and generation) capabilities incorporated into Cyc’s user interfaces.
	-
- ✅Knowledge Begets Knowledge: Steps towards Assisted Knowledge Acquisition in Cyc. (2005): mid-2004, >2.2M assertions, >250K concepts, 15K predicates.
- ✅[@friedlandProjectHaloDigital2004]
  collapsed:: true
	- OpenHalo utilized OpenCyc’s 6,000 concepts, but was augmented for Project Halo with 1,000 new concepts and 8,000 existing concepts selected from the full Cyc knowledge base. A significant fraction of the latter formed part of the compositional explanation-generation system
	- The Ontoprise system proved to be the fastest and most reliable, taking approximately 2 hours to complete its batch run. The SRI system ran the challenge in approximately 5 hours, and the Cycorp system completed its processing in over 12 hours
	- Cycorp’s OpenHalo knowledge base was two orders of magnitude larger than the other teams’. They were unable to demonstrate any measurable advantage in using this additional knowledge, even in example-based questions, where they exhibited meta-reasoning brittleness similar to that observed in the other systems. The size of their knowledge base does however explain some of the significant run-time differences. They have also yet to demonstrate successful, effective reintegration of Halo knowledge into the extended Cyc platform. Reuse and integration appear to remain open questions for all three Halo teams.
	- Cycorp’s generative approach may eventually scale and generalize, but the current results were extremely verbose and often unintelligible to domain experts.
- ✅✅[Cycorp: The Cost of Common Sense | MIT Technology Review](https://www.technologyreview.com/2005/03/01/274581/cycorp-the-cost-of-common-sense-2/) (2005-03-01) [@woodCycorpCostCommon2005]
	- In 1996, we got our first substantial government contract,” Lenat recalls. Since then, Cycorp has collected about half of its revenue from U.S. government agencies and the rest from companies, mostly for building “semantic maps” that help users pull information from various databases with a single query. By taking on paying projects, Cycorp has been able to stay profitable and debt-free. All of the firm’s stock is owned by its employees, making Cycorp answerable only to Cycorp. “But,” Lenat admits, “we have had to tack with the funding winds. Maybe 50 percent of the funding we get pushes us forward in the direction that we need to go.”
	- Cycorp doesn’t even want to be distracted by the rigors of the retail software business; instead, it licenses Cyc for use in third-party software packages.
	- The time may come, Lenat says, when a greatly expanded Cyc will underlie countless software applications. But reaching that goal could easily take another two decades.
- ✅[Mullins, Justin. "Whatever happened to machines that think?."](https://web.archive.org/web/20050423210805/http://www.newscientist.com/channel/info-tech/mg18624961.700) *New Scientist* 186.2496 (2005): 32-37.: singularity by 2015.
	- In the next few months \[Cyc\] will be put online for the world to interact with. And it’s only going to get cleverer. Opening Cyc up to the masses is expected to accelerate the rate at which it learns, giving it access to the combined knowledge of millions of people around the globe as it hoovers up new facts from web pages, webcams and data entered manually by anyone who wants to contribute.
	- “I believe we are heading towards a singularity and we will see it in less than 10 years,” says Doug Lenat
- ✅Applied ontology issues (2005): funny anecdote about "Ontological Engineer’s Handbook"
	- DB Lenat - Applied Ontology, 2005
	- I coined the phrase “ontological engineer” in the mid-1980’s, shortly after embarking on the construction of Cyc, because I didn’t like the pejorative tone of “knowledge enterer” or “knowledge worker”, and the term “knowledge engineer” had already been taken (to mean someone who builds expert systems). Based on that, when Addison-Wesley published our 1989 Cyc book (Building Large Knowledge-Based Systems), the editor playfully inserted a forward reference, at the front, under Other Publications, to the 1997 Ontological Engineer’s Handbook. Of course the joke was on us when, starting in 1997, we began to be deluged by requests for that nonexistent work.
- ✅An introduction to the syntax and content of Cyc (2006): 2.2M assertions, 250K concepts, 15K predicates.
- ✅[How, then, do you teach a computer common sense?](https://singularityfund.blogspot.com/2006/04/how-then-do-you-teach-computer-common.html) (2006-04-15): 300K concepts, 3M assertions
- ✅An introduction to the syntax and content of Cyc (2006): 900 person-years, 2.2M assertions, 250K concepts, 15K predicates
  collapsed:: true
	- The Cyc project has spent the past twenty years—approximately 900 person-years of effort
	- Cyc is a mature, but still developing, technology. The Cyc KB contains more than 2.2 million assertions (facts and rules) describing more than 250,000 terms, including nearly 15,000 predicates
	- Definition of `Event`:
	  
	  An important specialization of `Situation`, and thus also of `IntangibleIndividual` and `TemporallyExistingThing`. Each instance of `Event` is a dynamic situation in which the state of the world changes; each instance is something one would say ‘happens’. `Event`s are intangible because they are changes *per se*, not tangible objects that effect and undergo changes. Notable specializations of `Event` include `Event-Localized`, `PhysicalEvent`, `Action`, and `GeneralizedTransfer`. `Event`s should not be confused with `TimeIntervals`.
- ✅The Voice of the Turtle: Whatever Happened to AI? (2006 talk published in 2008): 900 person-year. ready to use Cyc as an inductive bias for learning
	- so many hours, so many careers, of brilliant researchers like Allen Newell and Herb Simon have been sacrificed to the altar of such verisimilitude. Generations of Carnegie Mellon University graduate students built Pure Production Systems, with the goal of duplicating the timing delays, error rates, and so on, of humans (for example, see Laird and Rosenbloom [1994]). Today we look back with disdain at ancients who pursued similar sorts of sympathetic magic rituals, but are we really that much different? I fear that some of our practices in faithfully duplicating human cognitive architecture fall under what Richard Feynman dubbed cargo cult science, with the same faith—part reverence and part hope—as the deluded South Seas islanders circa 1946 with their bamboo headphones, meticulously duplicating the form but totally misunderstanding the functionality, and the salience.
	- how much priming of the pump should go on, versus letting the computer learn everything on its own? My point here is that I fear that too many brilliant AI researchers have placed that bet too far toward the tabula rasa end of that spectrum, and as a result AI is not as far along as it could have been by now. I’ve been working at the opposite end—priming the pump in the form of building Cyc—for 24 plus years now, and after 900 person-years of such effort, we finally, in the last couple years, have been ready to use it as an inductive bias for learning. This has led to a dramatic shift in activity at Cycorp: most of our effort these days goes into utilizing Cyc for machine learning by discovery or by language understanding and clarification dialogue, not hand-coding assertions one by one.
	- I’ll mention one more error of this analogy-to-humans sort that has slowed down progress in AI: an almost mystical worship of physical embodiment.
- Common sense reasoning–from Cyc to intelligent assistant (2006)
- An Introduction to the Syntax and Content of Cyc (2006)
- natural language parsing
  collapsed:: true
	- 4-level parsing, from cheap to expensive
		- concept spotting: ... al-Qaeda ... embassy ... grenade ... suicide attack...
		- Extraction templates: [Subject-person] was involved in kidnapping [object-person].
		- Example-based machine translation by syntax templates: ... the heart of [city] ...
		  collapsed:: true
			- When seeing `the heart of [city]`, parse the `heart` as `central region`. Probably needs a few billion templates, which means it must be acquired mostly automatically.
		- Full syntax tree parsing
	- ✅An assessment of Cyc for natural language processing (1996): <=1500 of the 10K--12K concepts in Cyc are predicates
	  collapsed:: true
		- 21078 terms in Cyc, not all of which may be considered concepts
		- the Cyc lexicon
			- 12860 entries: an entry here is an instance of the “denotation” predicate; this, we
			  believe, is a rough mapping from a word to a concept, not the “lexical semantics” of
			  the word.
			  • The 12860 entries cover 9131 word forms
			  • Of the 12860 entries, about 3800 have no mappings to Cyc concepts currently (i.e.,
			  they map to StandInDenotation, to be filled in later when the necessary concepts are
			  acquired).
			  • Of these, 693 are proper nouns (“proper adjectives” are also listed as proper nouns).
			  • A test using the list of English words in Unix’ /usr/dict/words showed that only about
			  4500 out of the 25000 words had entries in Cyc’s lexicon.
			  • As for detailed semantic mappings (other than just “denotations”), we found
			  458 mappings for verbs (the verbSemTrans predicate) covering 382 verbs
			  212 mappings for nouns (the nounSemTrans predicate) covering 197 nouns
			  318 mappings for adjectives (the adjSemTrans predicate) covering 281 adjectives
			  0 mappings for adverbs (the adverbSemTrans predicate)
			  There are small numbers of other mappings:
			  • 4 uses of the agentiveNounSemTrans predicate
			  • 74 uses of the possessiveSemTrans predicate
			  • 22 uses of the lightVerb-TransitiveSemTrans
	- [Cyc Representing, Acquiring and Using Knowledge, Dr. Michael Witbrock Cycorp](https://slideplayer.com/slide/6392367/) (2007-05-24)
		- | English Words | 18,796 |
		  |---|---|
		  | Syntactic Frame Links | 23,336 |
		  | Single-word Denotation Mappings | 27,681 |
		  | Multi-word Phrase Denotation Mappings | 44,298 |
		  | Verbal Semantic Frame Links | 3,701 |
		  | Noun Semantic Frame Links | 2,578 |
		  | WordNet 2.0 Links | 11,322 |
		  | Names (Includes chemical symbols, person/place/organization names, acronyms, etc.) | 100,811 |
		  | Predicate-based Phrasal Links (genTemplates for paraphrase) | 9,637 |
		- ![image.png](./assets/image_1734923382518_0.png)
		-
	- [Knowledge for/from People for/from Computers](https://videolectures.net/videos/coinplanetdataschool2011_witbrock_cyc) (2011-08-28)
		- ```
		  <template>
		      <nlPattern class="140080">the heart of $City#0</nlPattern>
		      <cyclPattern>
		          (#$equalSymbols ?D (#$DowntownFn $City#0))
		      </cyclPattern>
		      <variable>?D</variable>
		      <type>#$Downtown</type>
		  </template>
		  ```
- ✅[Computers versus Common Sense (2006-05-30)](https://www.youtube.com/watch?v=KSrUHGaUE_c): 3.2M assertions, 300K concepts, 15K predicates,
  collapsed:: true
	- "thousands of" microtheories, each consistent, but inconsistent with each other, to handle the "translogic" of common sense.
	- \>1000 specialized reasoning modules, because the general theorem proving is too slow (and undecidable). Most are fast reasoners, some are slow meta-reasoners that decide which reasoner to pick, and a few are very slow meta-meta-reasoners that decide which meta-reasoner to pick. The ultimate reasoner is almost never called since it is so slow.
	- 15,000 predicates
	- 300,000 concepts
	  collapsed:: true
		- 11,000 event types: Cracking, Carving, Buying, Thinking, Mixing, Singing, CuttingNails, PumpingFluid...
		- 400 relations between an event and its participants: performedBy, objectPlaced, deviceUsed, inputsDestroyed, outputsCreated...
		- 120 types of emotions: Abhorrence, Adulation, Anticipation-Feeling...
		- lots of modal propositional attitudes: goals, intends, desires, hopes, expects, believes...
		- 37 temporal relations: after, startingDate, startsDuring, startingPoint, overlapsStart, startingDate...
		- 23 senses of "in": connectedToInside, screwedIn, sticksInto, in-ContainerCompletely, in-ContainerPartially, in-ContainerClosed, in-ContainerOpen
		- over 10,000 species of animals, 4,000 types of PhysicalDevice (ClothesWasher, NuclearAircraftCarrier, ...), 40 device states (DeviceOn, CockedState, ...), ...
	- Each assertion occurs in context, and context-space has 12 dimensions.
		- Anthropacity, Time, GeoLocation, TypeOfPlace, TypeOfTime, Culture, Sophistication/Security, TopicGranularity, Modality/Disposition/Epistemology, Argument-Preference, Justification
		- For example, "Ronald Reagan is president" is true in context `Time = 1985, GeoLocation = UnitedStates`.
	- 3.2M assertions
	- The trouble of machine learning
		- You can only learn at the fringe of knowing (Vygotsky's circle) -- the more you know, the more you can learn. Thus, to even get started, your machine must have already known a lot -- you have to prime the knowledge pump.
		- Statistical machine learning "from scratch" doesn't work. If it seems to work, it is because the creator has secretly put in a lot of knowledge by presenting only relevant data, only good featurizers, or using just the right statistical parameters.
		- So there is no way to do general machine learning than to manually prime the knowledge pump.
	- Minsky's estimate: 1000 person-years to prime the knowledge pump.
	- As of 2006, they were "mostly" autoformalizing from online information.
	- https://slideplayer.com/slide/6425196/
	-
- [Efficient Pathfinding in Very Large Data Spaces (2007-11)](https://apps.dtic.mil/sti/tr/pdf/ADA475387.pdf): 1 strategist, 4 tacticians, 1097 workers. The strategist and tacticians are parameterized.
	- AFRL-RI-RS-TR-2007-244 Final Technical Report November 2007
- [Case Study: A Semantic Web Content Repository for Clinical Research](https://www.w3.org/2001/sw/sweo/public/UseCases/ClevelandClinic/) (2007-10)
- Autonomous Classification of Knowledge into an Ontology (2007): 4.6M assertions, 23,627 microtheories
  collapsed:: true
	- Cyc currently contains about 4.6 million assertions in 23,627 microtheories, which have an average of approximately three microtheories directly below them in the hierarchy.
	- Historically, all assertions have been added to Cyc by ontologists, human knowledge engineers who are familiar with the Mt structure and able to determine the appropriate Mt placement (domain and level of generality) of that an assertion. This is not ideal for several reasons. It is timeconsuming; choosing the right microtheory can easily take several minutes for a trained ontologist who is familiar with the Cyc ontology and experienced in how best to organize knowledge for maximum utility.
- OpenCyc + [[Semantic Web]]
	- OpenCyc was in the [Standard Upper Ontology Working Group](https://web.archive.org/web/20120609070903/http://suo.ieee.org/), which lived from 2001 to 2003.
	  collapsed:: true
		- This standard will specify an upper ontology that will enable computers to utilize it for applications such as data interoperability, information search and retrieval, automated inferencing, and natural language processing. An ontology is similar to a dictionary or glossary, but with greater detail and structure that enables computers to process its content. An ontology consists of a set of concepts, axioms, and relationships that describe a domain of interest. An upper ontology is limited to concepts that are meta, generic, abstract and philosophical, and therefore are general enough to address (at a high level) a broad range of domain areas. Concepts specific to given domains will not be included; however, this standard will provide a structure and a set of general concepts upon which domain ontologies (e.g. medical, financial, engineering, etc.) could be constructed.
	- ✅[Entrepreneurs See a Web Guided by Common Sense - The New York Times](https://www.nytimes.com/2006/11/12/business/12web.html) (2006-11-12)
	  collapsed:: true
		- Some are focused on creating a vast new structure to supplant the existing Web; others are developing pragmatic tools that extract meaning from the existing Web.
		- But all agree that if such systems emerge, they will instantly become more commercially valuable than today’s search engines, which return thousands or even millions of documents but as a rule do not answer questions directly.
		- In its current state, the Web is often described as being in the Lego phase, with all of its different parts capable of connecting to one another. Those who envision the next phase, Web 3.0, see it as an era when machines will start to do seemingly intelligent things.
	- ✅[OpenCyc Brings Meaning to the Web](https://web.archive.org/web/20130120014200/http://cyc.com/cyc/company/news/OpenCyc%20Brings%20Meaning%20to%20the%20Web) (2008-08-18): `sw.opencyc.org` appeared.
	- ✅[OpenCyc for the Semantic Web](https://web.archive.org/web/20080826011848/http://sw.opencyc.org/) (2008)
	  collapsed:: true
		- Now it is even easier to use the rich and diverse collection of real-world concepts in OpenCyc to bring meaning to your semantic web applications! The full OpenCyc content is now available both as downloadable OWL ontologies as well as via semantic web endpoints (i.e., permanent URIs). These URIs return RDF representations of each Cyc concept as well as a human-readable version when accessed via a Web Browser.
	- ✅OpenCyc died sometime between 2017-02-27 and 2017-04-04
	  collapsed:: true
		- ✅[Wayback Machine](https://web.archive.org/web/20170227201513/http://opencyc.org/) (2017-02-27) OpenCyc still alive.
		- ✅[OpenCyc.org (2017-04-22)](https://web.archive.org/web/20170422212642/http://opencyc.org/): OpenCyc has shut down.
		  collapsed:: true
			- Part of the Cyc technology was released, starting in 2001, as OpenCyc, which provided an API, RDF endpoint, and data dump, under appropriate Apache and Creative Commons open source licenses.  Its distribution was discontinued in early 2017 because such “fragmenting” led to divergence, and led to confusion amongst its users and the technical community generally that that OpenCyc fragment *was* Cyc. Those wishing access to the latest version of the Cyc technology today should contact `info@cyc.com` to obtain a research license or a commercial license to Cyc itself. Information about ResearchCyc can be found here and EnterpriseCyc here.
		- ✅[Fare Thee Well, OpenCycAI3:::Adaptive InformationAI3:::Adaptive Information](https://www.mkbergman.com/2034/fare-thee-well-opencyc/) (2017-04-04)
		  collapsed:: true
			- I suspect the reasons for the retirement go deeper than this. As recently as last summer, senior Cycorp officials were claiming a new major release of OpenCyc was “imminent”.  There always appeared to be a tension within the company about the use and role of an open source version. Key early advocates for OpenCyc, including John De Oliveira, Stephen Reed and Larry Lefkowitz, are no longer with the company. The Cyc Foundation established to support the open source initiative was quietly shut down in 2015. The failure last year of the major AI initiative known as Lucid.ai, which was focused on a major commercialization push behind Cyc and reportedly to be backed by “hundreds of millions of dollars” of venture capital that never materialized, also apparently took its toll on company attention and resources.
			- Whatever the reasons, and there are likely others, it is hard to see how a 15-year effort could be characterized as experimental. While versions of OpenCyc v 4.0 can still be downloaded from third parties, including a fork, it is clear this venerable contributor to the early semantic Web will soon be available no longer, third parties or not.
	- ✅Massive ontology interface (2013)
	  collapsed:: true
		- Figure 1. An example of the native OpenCyc concept page.
		- ![image.png](./assets/image_1734394965580_0.png)
	- ✅The Cyc Foundation (2006--2015): a non-profit organization spun out of Cyc to promote the OpenCyc + Semantic Web combo. As usual, nothing ever came of it.
	  collapsed:: true
		- Sometime before 2007-11-02, they gave a mockup of a Cyc + Wikipedia = "Cyclopedia". [The Cyc Foundation » Cyclopedia](https://web.archive.org/web/20071102082440/http://www.cycfoundation.org/blog/?page_id=15) (2007). As usual, nothing ever came of it.
		  collapsed:: true
			- We are working on a version of Wikipedia that enables browsing the encyclopedia by concepts. Wikipedia article titles are linked to Cyc concept terms. Here is a mockup of the Cyclopedia interface. We are fairly close to releasing a beta version of Cyclopedia.
			- ![image.png](./assets/image_1734343357928_0.png){:height 602, :width 689}
		- [The Cyc Foundation](https://web.archive.org/web/20060501223341/http://www.cycfoundation.org/) was established sometime in 2006
		  collapsed:: true
			- Thank you for your interest in The Cyc Foundation. This newly formed non-profit organization is assuming stewardship of the Cyc structural ontology and the open source portions of the Cyc knowledge base—the world's largest common-sense knowledge repository. In this role, we will work with people from all walks of life to exponentially grow this amazing resource, educate developers, and increase general awareness of the potential applications of the technology.
			  
			  From our perspective, this is a momentous event—the culmination of over 20 years of thoughtful work and millions of dollars in research and development. But in truth, it is an event whose real importance will only be judged in time and can only occur with the assistance of those who see its transformative potential. If you are interested in working with us, or are curious how Cyc can be applied to your current project, please contact us here.
		- The [last post](https://web.archive.org/web/20110610022626/http://www.cycfoundation.org/blog/?p=45) was up in 2011-06, about the formation of schema.org, yet another organization for the Semantic Web.
		- It closed down sometime between [2015-09-10](https://web.archive.org/web/20150910135245/http://cycfoundation.org/) and [2015-09-24](https://web.archive.org/web/20150924210404/http://cycfoundation.org/). The domain expired between [2016-03-06](https://web.archive.org/web/20160306034534/http://cycfoundation.org/) and [2016-04-04](https://web.archive.org/web/20160404222149/http://cycfoundation.org/)
- Cyc + Internet
	- Searching for Common Sense: Populating Cyc™ from the Web (2005)
	- ✅FACTory (2005--2012)
		- https://web.archive.org/web/20061004063309/http://207.207.9.186/
		- https://web.archive.org/web/20120902022607/http://game.cyc.com/
		- Games with a purpose was all the rage circa 2005, with the breakout success of the [ESP game](https://en.wikipedia.org/wiki/ESP_game) (2003), so Cyc attempts to keep up with the times with its own FACTory (2005). It never got out of the `Beta version 1.0.1` and shut down sometime in 2012. According to the [tutorial](https://web.archive.org/web/20061205102605/http://207.207.9.186/helpfiles/HowToPlay.html), the game was literally just you telling Cyc whether an assertion it has parsed from the web is true or not.
	- ✅[Project Boosts Data Growth](https://web.archive.org/web/20121018030515/http://cyc.com/cyc/company/news/Waikato%20Times%20news%20article) (2009-09-09)
	  collapsed:: true
		- 45K new concepts have been automatically added to Cyc, increasing the number of commonsense knowledge concepts by 50%.
		- This probably means only the ResearchCyc part of it, since even in 2006 the full Cyc had 250K concepts. This implies at this point, ResearchCyc had 90K concepts.
		- most ontology engineers had a PhD in philosophy.
	- ✅"All You Can Eat" Ontology-Building: Feeding Wikipedia to Cyc (2009)
	  collapsed:: true
		- 35K concepts added to ResearchCyc, increasing it by 30%. This implies at this point, ResearchCyc had 120K concepts, <1/2 of the full Cyc.
		- A majority of our human evaluators judged that the placement of our new concepts within Cyc collections was ‘correct’ 88% of the time, and ‘correct’ or ‘close’ 90% of the time.
		- ![image.png](./assets/image_1734394205454_0.png)
		- ![image.png](./assets/image_1734421124631_0.png)
		- ![image.png](./assets/image_1734421114724_0.png)
	- [Integrating Cyc and Wikipedia: Folksonomy meets rigorously defined common-sense (2008)](https://web.archive.org/web/20120710145540/http://www.cs.waikato.ac.nz/~olena/cyc.html)
- ✅[TERRORISM KNOWLEDGE BASE (TKB), Final Technical Report (2008-04)](https://apps.dtic.mil/sti/pdfs/ADA481467.pdf): >1000 engines, >100 assertions/hour.
  collapsed:: true
	- https://en.wikipedia.org/wiki/MIPT_Terrorism_Knowledge_Base
	- The TKB is an augmentation of the existing Cyc® Knowledge Base (Cyc KB), which has been under intensive construction for the past 23 years. The Cyc KB contains a formalized representation of large tracts of consensus reality, encoded in hundreds of thousands of terms and millions of hand-axiomatized assertions organized into hundreds of contexts (called “microtheories”).
	- Prior to launching the development of the TKB, the Cyc KB already had some knowledge relevant to terrorist activity, such as knowledge about geopolitical events, WMD, biowarfare, etc., from various specialized previous U.S. Government projects using it (and, the process, expanding it) that had been performed by Cycorp.
	- The TKB effort has so far added to the Cyc KB knowledge of over 3700 individual terrorists, over 1000 different terrorist groups, and over 14,000 terrorist attacks. The representations of these individuals, groups and events are involved in over 300,000 assertions such as “Xavier Djaffor participated in the Jihad from 1996 to 2000” and “Lashkar-e-Taiba is an Islamic terror group founded in 1990”.
	- Data is entered by lightly trained subject-matter experts at >100 assertions/hour, using a form. If the entered text is ambiguous, it would ask. For example, entering "skating boy" and it would prompt for a choice between "boy who is a doer of skating" and "boy who performs skating professionally".
	  collapsed:: true
		- ![image.png](./assets/image_1734297045099_0.png){:height 585, :width 719}
		- ![image.png](./assets/image_1734300538902_0.png)
	- The database can be queried in the CycL high-level language, then used for inference to retrieve the result and justification.
	  collapsed:: true
		- An example of an analyst asking "list known attacks which killed any children at play, for which a likely suspect is someone who is mutually acquainted with a key member of Al Qaida". The analyst first write a query in CycL high-level language, then run the query.
		- ![image.png](./assets/image_1734300656613_0.png)
	- Though the natural language understanding was not yet functional, the user can enter a natural language sentence and the system would match it against similar previous sentences, and suggest the predicates that the user probably want for the query. The user can click some ones and combine them, and *usually* this results in the right CycL query. If not, the user can modify it.
	  collapsed:: true
		- ![image.png](./assets/image_1734301532399_0.png)
	- A good example of this that arose recently in response to a user’s query is asking the TKB to calculate the percentage of Hamas attacks between June 1, 2002 and May 15, 2004 that fall into a number of different classes – the percentage that are bombings, the percentage that are homicides, etc. The advantage of the TKB over a standard structured database, in this case, is that Cyc knows that any attack that results in the death of a civilian is a homicide. So, even if the attack is classified explicitly in the TKB as a bombing, so long as Cyc knows that at least one civilian was killed as a result of the attack, then it knows to count that attack as a homicide when calculating the percentage of Hamas attacks that are homicides. The reasoning often involves multiple sources. E.g., Cyc has information about the Khobar Towers bombing entered from two sources, one of which says that there were 19 casualties, and one of which says that 19 U.S. soldiers were killed in the attack. From these, Cyc can conclude that there were no civilian casualties in that attack, that all the casualties were Americans, and so on.
	- During the "Project Arete" demo, the median query takes 2 seconds to finish, and 8% times out after 300 seconds.
	- It was used experimentally in 2006, with good reviews. Despite this, the system shut down in 2008 (thus the title "Final Report").
	  
	  > In sum, the TKB has great potential as a tool to assist an analyst or law enforcement/military official in an investigation of terrorist individuals, groups, or events. The searchability of the system still needs improvement, though it has come great distances in terms of ease for the user. Moreover, TKB’s relevancy as a tool requires that the data be constantly updated.
- ✅✅[Doug Lenat - I was positively impressed with Wolfram Alpha | Semantic Universe](https://web.archive.org/web/20101024015555/http://www.semanticuniverse.com:80/blogs-i-was-positively-impressed-wolfram-alpha.html) (2009-03-10)
  collapsed:: true
	- The bottom line is that there are a large range of queries it can't parse, and a large range of parsable queries it can't answer even when it can answer the constituents out of which they should be answerable, but it handles a huge range of numeric and scientific queries correctly even in its current state.  And Dr. Wolfram and his team are chipping away at the natural language blocks, at the holes in the curated data repository, and at increasing the type and depth of logical combination of constituents, one by one, in priority order, just as they should.  I went in to the demo concerned that this might be a competitor to Cyc, given its "hand-curate knowledge and engineer it, versus let anyone add anything" philosophy, but came out of last night's  demo and discussion seeing Alpha as a complementary technology.  I would invest in this, literally and figuratively.  If it is not gobbled up by one of the existing industry superpowers, his company may well grow to become one of them in a small number of years, with most of us setting our default browser to be Wolfram Alpha.
- ✅Building a Machine Smart Enough to Pass the Turing Test Could We, Should We, Will We? (2009): 750 person-year, 720 engines
  collapsed:: true
	- spent over 750 person-years of effort on it so far
	- Heuristic Level (HL). By now, we have over 720 special-purpose HL reasoning modules
	- Phase 1: Prime the knowledge pump, by building a core ontology and associated knowledge base, basic reasoning modules, interfaces, etc.
	  collapsed:: true
		- All hurdles were overcome in 1990, and it remained to just build in the knowledge. This phase had been mostly completed, and most work was in phase 2 and 3.
	- Phase 2: Using that knowledge, power a mode of interaction and KB growth that is based on natural language understanding (one-shot reading of static text, and/or interactive back-and-forth clarification dialogue with a live human being acting as a “tutor”).
	  collapsed:: true
		- All hurdles were overcome.
	- Now that phase 2 and 3 are underway, most of the 25 applications could be started finally.
	- Phase 3: When the KB is large enough, have the system take an increasingly active role in its own continuing growth and application, including driving the dialogues (per phase 2) and carrying out automatic learning by discovery through a combination of introspection and gathering external online data.
	  collapsed:: true
		- getting it to automatically learn on its own: gather data, notice regularities, formulate hypotheses, and empirically text those on more data. This is a potentially explosive task, so will likely be tackled only once the others are well along. In the 5–10-year period of time from now, this may turn out to be the dominant mode of KB growth, for Cyc and for other large knowledge-based systems
- ✅Harnessing Cyc to Answer Clinical Researchers’ ad hoc Queries (2010)
  collapsed:: true
	- around 24 percent of the 126,000 most accessed Wikipedia pages from a typical hour had a corresponding existing Cyc concept
	- SRA is now used to ask each clinical research query involving cardiothoracic surgery, cardiac catheterization, and percutaneous coronary intervention.
	- Prior to SRA, approximately 300 new queries in those domains had been posed and answered each year, with most queries requiring 1–10 weeks (occasionally several tens of weeks) of real time to be answered to the physician’s satisfaction; in 2010, using SRA, such queries take 5–50 minutes to pro- duce satisfactory answers (occasionally several hours), and more than 2000 queries are processed each week.
	- Q1: “Are there cases in the last decade where patients had pericardial aortic valves inserted in the reverse position, to serve as mitral valve replace- ments, and how often in such cases did endocardi- tis or tricuspid valve infection develop, and how long after the procedure?”
	- Process
	  collapsed:: true
		- User enters question in mostly natural language.
		- Parse it syntactically. Apply domain and commonsense constraints to fix the parse. Retrieve some CycL fragments that seems to match what the user meant.
		- The user clicks on the fragments they meant. Cyc synthesizes a full query in CycL. The user optionally modifies the CycL query.
		- Cyc returns answer.
- ✅Foxvog, Douglas. "Cyc." Theory and applications of ontology: Computer applications (2010): 259-278.
  collapsed:: true
	- ![image.png](./assets/image_1734342724971_0.png)
	  collapsed:: true
		- Figure 1. Cyc upper ontology
	- ![image.png](./assets/image_1734342739695_0.png)
	- Figure 2. Instance-of relations in meta-class ontology
- ✅Usability of upper level ontologies: The case of ResearchCyc (2010): 4.5M assertions, 250K concepts, 900 person-years, 20K microtheories (as deep as 50 levels in some domains), [@conesaUsabilityUpperLevel2010]
  collapsed:: true
	- The Cyc project has spent the past twenty years, and approximately 900 person-years of effort, building a knowledge base to capture and represent common sense knowledge. As a result, the Cyc Ontololy contains more than 4.5 million assertions (facts and rules) describing more than 250,000 terms, including 15,000 predicates. A version of the Cyc ontology, called ResearchCyc, has been released for the scientific community. ResearchCyc contains both intensional information (entity types, relationship types, integrity constraint), extensional information (representation of individuals and their relationship to space, time and human perception) and linguistic information. In particular, the ResearchCyc lexicon contains entities for over 20.000 single-word noun, verb, adjective and adverb forms, 40.000 multi-word phrases, and over 100.000 proper names.
	- ![image.png](./assets/image_1734426675535_0.png)
	  collapsed:: true
		- Fig. 1. Car information from ResearchCyc.
	- ![image.png](./assets/image_1734429061187_0.png)
	  collapsed:: true
		- Table 1. Metaclasses of ResearchCyc and instances.
- ✅[The Most Ambitious Artificial Intelligence Project In The World Has Been Operating In Near-Secrecy For 30 Years](https://web.archive.org/web/20140703003406/http://www.businessinsider.com/cycorp-ai-2014-7) (2014-07-02)
  collapsed:: true
	- Many of the people are still here from 30 years ago — Mary Shepherd and I started [Cycorp] in August of 1984 and we're both still working on it. It's the most important project one could work on, which is why this is what we're doing. It will amplify human intelligence. Any time you look at any kind of real life piece of text or utterance that one human wrote or said to another human, it's filled with analogies, modal logic, belief, expectation, fear, nested modals, lots of variables and quantifiers. Everyone else is looking for a free-lunch way to finesse that. Shallow chatbots show a veneer of intelligence or statistical learning from large amounts of data. Amazon and Netflix recommend books and movies very well without understanding in any way what they're doing or why someone might like something. It's the difference between someone who understands what they're doing and someone going through the motions of performing something.
	- [Hofstadter] might know what needs to be done for things to be intelligent, but it has taken someone, unfortunately me, the decades of time to drag that mattress out of the road so we can do the work. It's not done by any means, but it's useful.
- ✅[Computers vs. Common Sense (2014-09-15)](https://www.fhi360.org/wp-content/uploads/drupal/documents/Doug%20Lenat%20Artificial%20Intelligence.pdf)
  collapsed:: true
	- 32,000 Predicates 172,000 Collections 500,000 Individuals 13,000,000 Assertions, thousands of contexts
	- 1050 special reasoners
	- Interfaces: Interactive English, NLU/NLG dialogue, Structured knowledge acquisition tools, Automated knowledge acquisition , Semantic DB Integration
- ✅[CMU Distinguished Lecture Series - 50 Shades of Symbolic Representation and Reasoning](https://youtu.be/4mv0nCS2mik) (2015-12-08) [@lenat50ShadesSymbolic2015]: 32K predicates, 172K categories, 500K concepts, 15M assertions (mostly 1th order). They hadn't added a new upper-level ontology category for years, so they were "Just about at the end of the ontology building stage.", about 95% done knowledge priming, about 5% of total knowledge encoded.
- ✅✅[PlanetTech interviews Michael Stewart, founder, chairman and CEO of Lucid AI (2015-08-21)](https://www.planettechnews.com/planettech-interviews-michael-stewart-founder-chairman-and-ceo-of-lucid-ai/): Cyc has deep learning inside... somehow. "Lucid is ready to commercialize Cyc intelligence to disrupt industry applications like never before." More commercial bullshit.
  collapsed:: true
	- Deep learning is already present in Cyc’s operating system. It’s this deep learning capability that differentiates Cyc from other AI offerings. Most notably, it can understand structured and unstructured data, bring insights to it and derive valuable conclusions from it. It can do all of this with much less human analysis and interpretation required compared to other AI solutions available.   Now that Cyc is established as the world’s only functioning symbolic-AI platform, it will be used by Lucid in the coming years to extend Cyc’s learning modalities into other functional forms of learning-types, including deep neural, statistical co-occurrence, visual interpretative methods, natural language and other auditory methods.   Expansion into these areas will allow Cyc to compile a cumulative learning machine architecture capable of sensing and understanding the world comprehensively with a combined collection of multi-sensorial modes of information inputs. This process is similar to the human reality assembled in the brain from inputs of the five senses.
	- We’re currently fully engaged with finance and healthcare markets. During the next 12-18 months, with incremental investment, we’ll be able to more aggressively pursue the demand we see in energy and retail supply chain markets.
	- Within 10 years, we expect Cyc to expand its distribution to nearly all industries and geographic cultures worldwide. Imagine AI helping economists avert the next financial crisis, enabling engineers to create more sustainable energy options and doctors to cure cancer.
	- Google and IBM are two leading organizations with vast resources available to make an impact on the future of AI. Lucid is ready to commercialize Cyc intelligence to disrupt industry applications like never before.
	- What AI project so far have really impressed you, made you think, yes, that is really a leap above everything else out there?
	   
	  Cyc and only Cyc, really.
	- What do you think of the concept of the Singularity as it relates to an intelligence explosion caused by exponentially improving general AI, whether we improve the AIs or they improve themselves (or a combination)? How seriously do you take this idea?
	   
	  Very seriously, and lucidity is the result of singularity. That is where Lucid got its name, with Cyc as the core enabler.
- ✅Commonsense reasoning and commonsense knowledge in artificial intelligence (2015)
  collapsed:: true
	- CYC is often mentioned as a success of the knowledge-based approach to AI; for instance Dennett 13 writes, “CYC is certainly the most impressive AI implementation of something like a language of thought.” However, it is in fact very difficult for an outsider to determine what has been accomplished here. In its first 15 years, CYC published astonishingly little. Since about 2002, somewhat more has been published, but still very little, considering the size of the project. No systematic evaluation of the contents, capacities, and limitations of CYC has been published.
	- It is not, for example, at all clear what fraction of CYC actually deals with commonsense inference, and what fraction deals with specialized applications such as medical records or terrorism. It is even less clear what fraction of commonsense knowledge of any kind is in CYC. The objective of representing 400 encyclopedia articles seems to have been silently abandoned at a fairly early date; this may have been a wise decision; but it would be interesting to know how close we are, 30 years and 239,000 concepts later, to achieving it; or, if this is not an reasonable measure, what has been accomplished in terms of commonsense reasoning by any other measure. There are not even very many specific examples of commonsense reasoning carried out by CYC that have been published.
	- There have been conflicting reports about the usability of CYC from outside scientists who have tried to work with it. Conesa et al. report that CYC is poorly organized and very difficult to use
		- Usability of upper level ontologies: The case of ResearchCyc (2010)
	- They further report a large collection of usability problems including problems in understandability, learnability, portability, reliability, compliance with standards, and interface to other systems. More broadly, CYC has had comparatively little impact on AI research—much less than less sophisticated online resources as Wikipedia or WordNet.
- ✅[One genius' lonely crusade to teach a computer common sense](https://archive.is/pyPzn) (2016-03-24)
	- But because they rely on what is essentially statistical analysis, neural nets get things wrong... But Cyc can help guide these neural networks, Lenat says. It can give them at least some of the common sense they need.
	- You’re not going to see this approach scale up to levels one to sixty in World of Warcraft, or even to mediocre puzzles in The Secret World. Even in the gaming world—leaving aside real world tasks—there’s this long tail of more complicated games that are not going to be learned using the Google approach. In the same way, you can build taller and taller towers—and that may be impressive—but you’re never going to get to the moon by building a tall enough tower.
- [OpenCyc 4.0](https://web.archive.org/web/20170227201513/http://www.opencyc.org/): just an ontology containing 239K concepts, 2M triples (like `(Napoleon Bonaparte, birthDate, 1769)`), and some links to DBpedia, WordNet, CIA World Factbook, etc. It is a glorified dictionary.
  collapsed:: true
	- **The core Cyc ontology **whose domain is all of human consensus reality. The current release includes:
	  collapsed:: true
		- **~239,000 terms** (up from ~177,000 terms in the previous release)
		- **~2,093,000 triples** (up from ~1,500,000 in the previous release)
		- Select class (direct and indirect) instance counts:
		  collapsed:: true
			- [‘place’](https://web.archive.org/web/20170226091531/http://sw.opencyc.org/concept/Mx4rvVjTtJwpEbGdrcN5Y29ycA): ~19,000
			- [‘organization’](https://web.archive.org/web/20170226091531/http://sw.opencyc.org/concept/Mx4rvVjVT5wpEbGdrcN5Y29ycA): ~26,000
			- [‘predicate’](https://web.archive.org/web/20170226091531/http://sw.opencyc.org/concept/Mx4rvViA1pwpEbGdrcN5Y29ycA): ~22,000
			- [‘business related thing’](https://web.archive.org/web/20170226091531/http://sw.opencyc.org/concept/Mx4rtuNldOW_EdqAAAACs2IKaQ): ~28,000
			- [‘person’](https://web.archive.org/web/20170226091531/http://sw.opencyc.org/concept/Mx4rvViAkpwpEbGdrcN5Y29ycA): ~12,700
		- **~69,000 owl:sameAs links **to external (non-Cyc) semantic data namespaces:
		  collapsed:: true
			- DBpedia: ~47,000 links, *including 696 links to the DBpedia ontology*
			- UMBEL: ~21,000 links
			- WordNet: ~11,000 links
			- Wikicompany: 1028 links
			- CIA World Factbook: 172 links
			- RDFAbout SEC company identifiers: 661 links
			- RDFAbout states and counties: 71 links
			- FOAF: 44 links
		- English strings (a canonical one and alternatives) corresponding to each concept term, to assist with search and display.
	- A java-based Cyc Inference Engine and the Cyc Knowledge Base Browser
	- Documentation and self-paced learning materials to help users achieve a basic- to intermediate-level understanding of the issues of knowledge representation and application development using Cyc.
	- A specification of CycL, the language in which Cyc (and hence OpenCyc) is written.
	- A specification of the Cyc API for application development.
- ✅[Sometimes the Veneer of Intelligence is Not Enough](https://cognitiveworld.com/articles/sometimes-veneer-intelligence-not-enough) (2017-05-15): 15M assertions.
  collapsed:: true
	- ![image.png](./assets/image_1734140765651_0.png)
	- This is a large part of the reason why unrestricted natural language understanding is so difficult to program.  No matter how good your elegant theory of *syntax* and *semantics* is, there’s always this annoying residue of *pragmatics, *which ends up being the lower 99% of the iceberg.  You can wish it weren’t so, and ignore it, which is easy to do because it’s out of sight (it’s not explicitly there in the letters, words, and sentences on the page, it’s lurking in the empty spaces around the letters, words, and sentences.)  But lacking it, to any noticeable degree, gets a person labeled *autistic*.   They may be otherwise quite smart and charming (such as Raymond in *Rain Man *and Chauncey Gardiner in *Being There*), but it would be frankly dangerous to let them drive your car, mind your baby, cook your meals, act as your physician, manage your money, etc.  And yet those are the very applications the world is blithely handing over to severely autistic AI programs! 
	  
	  I’ll have some more to say about those worries in future columns, but my focus will be on constructive things that can be done, and are being done, to break the AI brittleness bottleneck once and for all.
	- *Knowing* a lot of facts is at best a limited substitute for *understanding.  *Google is proud that its search bar knows 70 billion things, and it should be proud of that.  * *By contrast, the Cyc system only knows 15 million things, and relatively few of them are what one would call specific facts, they’re more general pieces of common sense knowledge like “*If you own something, you own all its parts*” and “*If you find out that someone stole something of yours, you’re likely to be mad at them*” and “*If someone wants something to be true then they’re more likely to act in ways that bring that state of affairs about*”.  Google’s 70 billion facts can answer 70 billion questions, but Cyc’s 15 million rules and assertions can answer trillions of trillions of trillions of queries – just like you and I can – because it can reason a few steps deep with/about what it knows.  Cyc’s reasoning “bottoms out” in needing specific facts, such as the birth date of Donald Trump, but fortunately those are exactly the sorts of things it can “look up” just as you or I would.
	- The importance of having a formal representation for knowledge, so that inference can be automated.  While it’s vastly more convenient to just leave things in natural language, it’s vastly more difficult for programs to understand.  There are of course some things that programs can do without really understanding, like recognize patterns and make recommendations, and AI today is a wonderland of exactly such applications.
	- The importance of the formal representation language being expressive enough to capture all the sorts of things people say to each other, the things one might find in an ad or a novel or a news report.  Drastically less expressive, simpler formal languages (such as RDF and OWL) focus on what can readily be done *efficiently, *and then may try to add on some tricks to recoup a little of the lost expressivity, but that’s a bit like trying to get to the moon by building taller and taller towers.  By contrast, what I’ve found necessary is to force yourself to use a fully expressive language (higher order logic) and then try to add on some tricks to recoup lost efficiency.
	- Most significantly of all, for Cognitive Computing in the coming decade, is how this sort of “left brain” deduction, induction, and abduction can collaborate and synergize with the sort of “right brain” thinking-fast that all the rest of AI is, today.
- ✅How much is a triple (2018) [@paulheimHowMuchTriple2018]: in 2017, \$120M, 21M assertions, 1000 person-years.
  collapsed:: true
	- At a 2017 conference, Douglas Lenat, the inventor of Cyc, denoted the cost of creation of Cyc at $120M. In the same presentation, Lenat states that Cyc consists of 21M assertions, which makes a cost of $5.71 per statement. As a footnote, the development time of 1,000 person years boils down to 9.5 minutes per assertion.
- [The Promise and Limitations of AI • Doug Lenat • GOTO 2019](https://www.youtube.com/watch?v=v2rK40bNrrY): 2000 person-years, $200M
	- https://web.archive.org/web/20210430003227/https://files.gotocon.com/uploads/slides/conference_13/724/original/AI_GOTO%20Lenat%20keynote%2030%20April%202019%20hc.pdf
- ✅[Not Good As Gold: Today's AI's Are Dangerously Lacking In AU (Artificial Understanding)](https://www.forbes.com/sites/cognitiveworld/2019/02/18/not-good-as-gold-todays-ais-are-dangerously-lacking-in-au-artificial-understanding/#234b26be536d) (2019-02-18): 20 engines in 1989. >1100 in 2019.
  collapsed:: true
	- By 1989, we had identified and implemented about 20 such special-case reasoners, each with its own data structures and algorithms.  Today there are over 1100 of these “heuristic level reasoning modules.
- [Episode 89: A Conversation with Doug Lenat – Voices in AI](https://voicesinai.com/episode/episode-89-a-conversation-with-doug-lenat/) (2019-06)
	- a great story that Marvin Minsky told me, my late friend and colleague, about when he was at Lincoln Labs about 50 years ago. And in those days computer time was so precious that you submitted a deck of computer cards and the very first card said ‘how many CPU seconds to allow the program to run?’ And so he built a program that essentially would beg for time. So it would say ‘give 30 seconds’ on the job control card, but then once it started, all it would do is sit there for 15 seconds doing nothing. Then it would ring a bell on the Teletype console in the machine room and call the operator’s attention and say ‘I need 20 more seconds please.’ Then it would just sit there for another 15 seconds and do that again and say ‘I need another minute please.’ And so at the end finally after like half an hour, the operator just killed that particular job. And Marvin would storm into the poor operator’s room and say “Hey I put 15 seconds on the job control card. You're charging me for half an hour of CPU time,” and the poor operator would say “well your program kept asking for it,” and Marvin would say, "it always does that."
	-
- ✅[Technology Overview (2021-04)](https://cyc.com/wp-content/uploads/2021/04/Cyc-Technology-Overview.pdf)
  collapsed:: true
	- An ontology of about 1.5 million general concepts
	- More than 25 million general rules and assertions involving those concepts
	- Domain-specific extensions to the common sense ontology and knowledge base in areas such as healthcare, intelligence, defense, energy, transportation, and financial services.
	- over 1,100 inference engines
- ✅[\#221 – Douglas Lenat: Cyc and the Quest to Solve Common Sense Reasoning in AI (2021-09-15)](https://transcript.lol/read/youtube/@lexfridman/6522f331033150beacd16e19)
  collapsed:: true
	- Minsky anecdote
	  collapsed:: true
		- So this is back in the day when you had job control cards at the beginning of your IBM card deck that said things like how many CPU seconds to allow this to run before it got kicked off and because computer time was enormously expensive.
		  So he wrote a program and all it did was, it said, "Give me 30 seconds of CPU time.". And all it did was it would wait like 20 seconds and then it would print out on the operator's teletype. "I need another 20 seconds."
		  So the operator would give it another 20 seconds. It would wait. It says, "I'm almost done. I need a little bit more time.". So at the end, he'd get this printout and he'd be charged for like 10 times as much computer time as his job control card. And he'd say, "Look, I put 10 seconds, 30 seconds here. You're charging me for five minutes. I'm not going to pay for this.". And the poor operator would say, "Well, the program kept asking for more time.". And Marvin would say, "Oh, it always does that.".
	- funding
	  collapsed:: true
		- 5 years ago, almost all of our money came from the government. Now, virtually none of it comes from the government. Almost all of it is from companies that are actually using it for something, hospital chains using it for medical reasoning about patients and energy companies using it and various other manufacturers using it to reason about supply chains and things like that.
	- Knowledge Axiomatization Institute
	  collapsed:: true
		- We've formed a not-for-profit company called the Knowledge Axiomatization Institute, NAX, K-N-A-X, and I have this firm belief with a lot of empirical evidence to support it, that the education that people get in high schools and colleges and graduate schools and so on is almost completely orthogonal to, almost completely irrelevant to how good they're going to be at coming up to speed in doing this kind of ontological engineering and writing these assertions and rules and so on in psych. And so very often we'll interview candidates who have their PhD in philosophy, who've taught logic for years and so on, and they're just awful. But the converse is true. So 1 of the best ontological engineers we ever had never graduated high school. And so the purpose of Knowledge X-Munization Institute, if we can get some foundations to help support it, is identify people in the general population, maybe high school dropouts, who have latent talent for this sort of thing, offer them, effectively, scholarships to train them, and then help place them in companies that need more trained ontological engineers, some of which would be working for us, but mostly would be working for partners or customers or something. And if we could do that, that would create an enormous number of relatively very high-paying jobs for people who currently have no way out of some situation that they're locked into.
	- NOTE. The [Knowledge Axiomatization Institute was formed in 2017-09](https://projects.propublica.org/nonprofits/organizations/814098571), but seemed to have no activity since 2019-09.
	- Mathcraft
	  collapsed:: true
		- why is that not widely used in schools today? We're not really trying to make big profit on it or anything like that. When we've gone to schools, their attitude has been, well, if a student spends 20 hours going through this Math Craft program from start to end and so on, will it improve their score on this standardized test more than if they spent 20 hours just doing mindless drills of problem after problem after problem?
		  
		  And the answer is, well, no, but it'll increase their understanding more and their attitude is, well, if it doesn't increase their score on this test, then that's not, we're not gonna adopt it.
- ❌[Can Computers Learn Common Sense? | The New Yorker](https://web.archive.org/web/20220405192507/https://www.newyorker.com/tech/annals-of-technology/can-computers-learn-common-sense) (2022-04-05)
  collapsed:: true
	- “It’s basically representing and reasoning in real time with complicated nested-modal expressions,” Lenat told me. Cycorp, the company that owns Cyc, is still a going concern, and hundreds of logicians have spent decades inputting tens of millions of axioms into the system; the firm’s products are shrouded in secrecy, but Stephen DeAngelis, the C.E.O. of Enterra Solutions, which advises manufacturing and retail companies, told me that its software can be powerful. He offered a culinary example: Cyc, he said, possesses enough common-sense knowledge about the “flavor profiles” of various fruits and vegetables to reason that, even though a tomato is a fruit, it shouldn’t go into a fruit salad.
- ✅Creating a 30-Million-Rule System: MCC and Cycorp (2022): >1100 engines, 2000 person-years.
  collapsed:: true
	- In 1986, Cyc had two such representations; by 1990, there were 20, each with its own inference engine; today Cyc has over 1100.
- ✅[[ACS 2022] Invited Talk: Computers versus Common Sense - Doug Lenat - YouTube](https://www.youtube.com/watch?v=VjkbmLjwXO8&t=288s) (2022-11)
- ✅Lenat, Doug, and Gary Marcus. "Getting from generative ai to trustworthy ai: What llms might learn from cyc." *arXiv preprint arXiv:2308.04445* (2023).: 2000 person-years.
  collapsed:: true
	- Cyc began with a frame-and-slots representation akin to today’s Knowledge Graphs [Lenat, Prakash, and Shepherd 1986], and an inference engine that ran expert systems style if-then rules, also known as situation-action rules.
	- There are many such logics to choose from, but only higher order logic can represent the same breadth of thought as a natural language. By the late 1980’s, Cyc assertions and rules were expressed in such a language, CycL. It includes full first order logic (with variables, nested quantifiers, predicates, functions, etc.), and allows statements about other statements, statements about functions, statements about what the inference engine is trying to do at any moment and why
	- The obligatory LLM-insult
	  collapsed:: true
		- Given the arduous nature of the reasoning required (see Figure 1) and the need for tens of millions of general rules of thumb, not just a handful (A1-A6) of them, it is understandable almost all AI researchers and developers have gone in the opposite direction, abandoning or trivializing symbolic representation and reasoning, and instead seeking one or another sort of “free lunch” in the form of perceptrons, multi-layer neural networks and, most recently, LLMs... limiting an AI to such a narrow “baby talk” language would be a huge barrier to it ever becoming a trustworthy general AI.
	- how is Cyc able to operate sufficiently quickly, often producing hundred-step-long arguments in seconds across such a huge KB expressed in higher order logic? ... symbolic AI systems other than Cyc often approach speed very differently. Many limit their KB (which is what led to stove-piped Expert Systems), or they limit the expressiveness of their representation of knowledge, or they limit the types of operations that can be performed on those (i.e., they adopt a more limited, but faster, logic.) E.g., they choose knowledge graphs or propositional logic which does not allow quantifiers, variables, modals, and so on.
	- By 1989, Cyc had 20 such high-level reasoners; today it has over 1,100.
	- When confronted with a problem, all 1,100 reasoners are effectively brought to bear, and the most efficient one which can make progress on it does so, and the process repeats, over and over again, the “conversation” among the 1,100 Heuristic-Level modules continuing until the problem has been solved, or resource bounds have been exceeded (and work suspends on it). In principle there is always the general resolution theorem prover with its hand raised in the back of the room, so to speak: it always thinks it could apply, but it is the last resort to be called on because it always takes so long to return an answer.
	- When Cyc is applied to a new practical application, it is sometimes the case that even when it gets the right answers, its current battery of reasoners turns out to be unacceptably slow. In that case, the Cyc team shows to the human experts (who are able to perform the task quickly) Cyc’s step by step reasoning chain and asks them to introspect and explain to us how they are able to avoid such cumbersome reasoning. The result is often a new special-purpose Heuristic Level reasoner, possibly with its own new, redundant representation which enables it to run so quickly. This is what happened, e.g., for a chemical reaction application, where a special notation for chemical equations enabled a special-purpose algorithm to balance them quickly.
	- Something we don’t often talk about: We noticed empirically that the general theorem-proving reasoner actually took so long that over a million queries in a row that called on it, as a last resort, just timed out. Going back farther, we saw that that had happened for decades. So, about one decade ago, we quietly turned the general theorem prover off, so it never gets called on! The only impact is that Cyc sometimes runs a bit faster, since it no longer has that attractive but useless nuisance available to it.
	- The trap the Cyc team fell into was assuming that there would be just one representation for knowledge, in which case it would have to be \[higher-order logic, or HOL\] with modals, because it is the only one expressive enough for all AGI reasoning purposes. Committing to that meant vainly searching for some fast general-purpose reasoning algorithm over HOL, which probably doesn’t exist. To escape from the trap the Cyc team built up a huge arsenal of redundant representations and redundant reasoners, such that in any given situation one of the efficient reasoners is usually able to operate on one of those representations and make some progress toward a solution. The entire arsenal is then brought to bear again, recursively, until the original problem has been fully dealt with or given up on. That last point raises another aspect of how Cyc reasons quickly: it budgets resources, depending on the application (e.g., acceptable wait times during a conversation with a person), and interrupts reasoners who exceeded their bid on how long they would take, and simply won’t bother calling on reasoners who know they will take too long.
	- Another example of this kind of synergy occurred in a project Cycorp and the Cleveland Clinic did for NIH’s National Library of Medicine. Databases have been built up of patients’ mapped genomes and the disease that brought them into the hospital. Using that, one can statistically learn correlations between point mutations in their DNA and their disease. But such A→Z correlations turned out to be enormously noisy. Enter Cyc, which took each of those hypotheses and tried to find a long chain of reasoning that could account for that (e.g., this mutation is next to this gene, which when expressed would be this protein, which in turn could catalyze this reaction, which... ten steps later interfered with bone resorption, which is why the patient developed early-onset osteoporosis.) Such causal pathways generally made predictions along the way (e.g., that the patient would also have slightly elevated bioactive vitamin-D levels) which could then be independently confirmed or disconfirmed in the patient database.
- ✅[Remembering Doug Lenat (1950–2023) and His Quest to Capture the World with Logic—Stephen Wolfram Writings](https://writings.stephenwolfram.com/2023/09/remembering-doug-lenat-1950-2023-and-his-quest-to-capture-the-world-with-logic/)
  collapsed:: true
	- He was just working with “pure human-like reasoning”, I said, like one would have had to do in the Middle Ages. But... we used all the things that got invented in modern times in science and math... I think Doug viewed CYC as some kind of formalized idealization of how he imagined human minds work: providing a framework into which a large collection of (fairly undifferentiated) knowledge about the world could be “poured”. At some level it was a very “pure AI” concept: set up a generic brain-like thing, then “it’ll just do the rest”. But Doug still felt that the thing had to operate according to logic, and that what was fed into it also had to consist of knowledge packaged up in the form of logic.
	- He’d enthusiastically tell me about particular kinds of knowledge that had been put into CYC. But time and time again I’d have to tell him that actually we already had systematic data and algorithms in those areas. Often I felt a bit bad about it. It was as if he’d been painstakingly planting crops one by one, and we’d come through with a giant industrial machine... Doug and I continued to talk about somehow working together, but nothing ever happened... Doug could play with Wolfram|Alpha and Wolfram Language any time. But I’d never once actually been able to try CYC. Several times Doug had promised API keys, but none had ever materialized.
- gossips
	- ✅[Open Cyc (open source common sense) | Hacker News](https://news.ycombinator.com/item?id=1913994) (2010-11)
		- The Cyc project, while fascinating, is basically a serious attempt at a general purpose semantic graph. It's been in the works since the early 80's.
		  And you know what? It should act as a warning to anybody thinking seriously about building large-scale semantic systems like the semantic web.
		- I've been following Cyc off and on for 20 years. It has yet to produce anything that interests me. I have yet to see a good project I can get my hands on that gets anything OUT of Cyc. Last time I checked, after decades of input into Cyc all the papers on the Cyc sites were still about new ways to put into Cyc. They started an annual contest a few years ago for Cyc projects. I actually hacked together a not very good proposal to attempt to get value added information out of Cyc; and the winner? An academic proposal on another method of feeding the Cyc knowledge base.
		- The OpenCyc ontology includes all the simple terms (Cyc constants) and composed terms (Cyc non-atomic reified terms) that full Cyc does. OpenCyc includes that subset of of full Cyc assertions which match the definitional statement types of OWL (the web ontology language). E.g. the class cyc:Action is a sub class of cyc:Event which is a sub class of owl:Thing. What is left out of OpenCyc, but included in ResearchCyc (full Cyc) are the ordinary assertions that relate concepts, e.g. cyc:DougLenat cyc:president cyc:Cycorp.
		  OpenCyc's purpose is to spread the use of the Cyc ontology in the Semantic web and Linked Data.
	- ❌[Ambitious Artificial Intelligence Project Operating In Near-Secrecy For 30 Years | Hacker News](https://news.ycombinator.com/item?id=7980458) (2014-07)
	- ✅[Replicating Douglas Lenat's Traveller TCS win with publicly-known techniques — LessWrong](https://www.lesswrong.com/posts/Myr7PLikhzYgPFhuy/replicating-douglas-lenat-s-traveller-tcs-win-with-publicly) (2013-10-26)
	  collapsed:: true
		- My suspicion is that Lenat's TCS win tells us more about TCS than about EURISKO, that TCS is likely a game that's inherently vulnerable to the "find winning strategies by simulating a lots of games on a computer" meta-strategy. I've heard, for example, that battles are often tactically trivial, with the outcome of battles effectively determined by the composition of the two fleets (and fleet composition is what Lenat used EURISKO for). If that hypothesis is correct, though, it suggests it shouldn't be necessary to reimplement EURISKO specifically to get a program that's good at designing TCS fleets. If that turns out not to be the case, it would be evidence that there really is something special about EURISKO after all.
	- ✅[Cyc | Hacker News](https://news.ycombinator.com/item?id=21781597) (2019-12-13)
	  collapsed:: true
		- Pros
			- Everyone there is very smart and depending on your tastes, it can be pretty fun to be in meetings where you try to explain Davidsonian ontology to perplexed business people. I suspect a decent fraction of the technical staff are reading this comment thread. There are also some genuine technical advances (which I wish were more publicly shared) in inference engine architecture or generally stemming from treating symbolic reasoning as a practical engineering project and giving up on things like completeness in favor of being able to get an answer most of the time.
			- I was initially pretty skeptical of the continued feasibility of symbolic AI when I went in to interview, but Doug Lenat gave me a pitch that essentially assured me that the project had found a way around many of the concerns I had. In particular, they were doing deep reasoning from common sense principles using heuristics and not just doing the thing Prolog often devolved into where you end up basically writing a logical system to emulate a procedural algorithm to solve problems.
		- Cons
			- There were also some big negatives, mostly structural ones. Within Cycorp different people have very different pictures of what the ultimate goals of the project are, what true AI is, and how (and whether) Cyc is going to make strides along the path to true AI. The company has been around for a long time and these disagreements never really resolve - they just sort of hang around and affect how different segments of the company work. There's also a very flat organizational structure which makes for a very anarchic and shifting map of who is responsible or accountable for what. And there's a huge disconnect between what the higher ups understand the company and technology to be doing, the projects they actually work on, and the low-level day-to-day work done by programmers and ontologists there.
			- It turns out there's a kind of reality distortion field around the management there, despite their best intentions - partially maintained by the management's own steadfast belief in the idea that what Cyc does is what it ought to be doing, but partially maintained by a layer of people that actively isolate the management from understanding the dirty work that goes into actually making projects work or appear to. So while a certain amount of "common sense" knowledge factors into the reasoning processes, a great amount of Cyc's output at the project level really comes from hand-crafted algorithms implemented either in the inference engine or the ontology.
			- The degree of isolation between different mindsets and disagreement (that was typically very amicable if it was acknowledged at all) is emblematic of the culture of the company. There are people there with radically different ideas of what Cyc is for, what it's good at and even about empirical things like how it actually works. They mostly get along, sometimes there's tension.
			- Over the years, the Cyc as its actually implemented has drifted pretty far from the Cyc that people like Doug Lenat believe in, and the degree to which they're willing or able to acknowledge that seems to sort of drift around, often dependent on factors like mood. Doug would show up and be very confused about why some things were hard because he just believes that Cyc works differently than it does in practice, and people had project deadlines, so they often implemented features via hacks to shape inference or hand-built algorithms to deliver answers that Doug thought ought to be derived from principles via inference. Doug thinks way more stuff that Cyc does is something that it effectively learned to do by automatically deriving a way to solve the general form of a problem, rather than a programmer up late hand-coding things to make a demo work the next day, and the programmers aren't going to tell him because there's a demo tomorrow too and it's not working yet.
			- Also the codebase is the biggest mess I have ever seen by an order of magnitude. I spent some entire days just scrolling through different versions of entire systems that duplicate massive chunks of functionality, written 20 years apart, with no indication of which (if any) still worked or were the preferred way to do things.
		- Why secrecy?
		  collapsed:: true
			- The external factors come from the clients they work with, who often demand confidentiality. Some of their most successful projects are extremely closely guarded industry secrets. I think people at Cycorp would love to publicly talk a lot more about their projects if they could, but the clients don't want the competition getting wind of the technology.
			- The internal factors are less about intentionally hiding things and more about not committing any resources to being open. A lot of folks within Cycorp would like for the project to be more open, but it wasn't prioritized within the company when I was there. The impression that I got was that veterans there sort of feel like the broader AI community turned their back on symbolic reasoning in the 80s (fair) and they're generally not very impressed by the current trends within the AI community, particularly w.r.t. advances in ML (perhaps unfairly so), so they're going to just keep doing their thing until they can't be ignored anymore. "Their thing" is basically paying the bills in the short term while slowly building up the knowledge base with as many people as they can effectively manage and building platforms to make knowledge entry and ontological engineering smoother in the future.
			- Doug Lenat is weirdly unimpressed by open-source models, and doesn't really see the point of committing resources to getting anyone involved who isn't a potential investor. They periodically do some publicity (there was a big piece in Wired some time ago) but people trying to investigate further don't get very far, and efforts within the company to open things up or revive OpenCyc tend to fall by the wayside when there's project work to do.
			- Some of us here are trying to push for a revival of OpenCyc or something similar, to democratize things and get third-party developers playing with the system, but for now OpenCyc is not really supported.
		- Code?
			- An in-house dialect of Common Lisp that compiles to Java (it predates Clojure). Deployment is still fairly ad-hoc, but we build Containers.
			- Java _code_. It's madness, though I'm assured it made sense at the time.
		- Dream of AGI?
			- I joined Cycorp because Doug Lenat sold me on it being a more viable path toward something like AGI than I had suspected when I read about it. I left for a number of reasons (e.g. just to pursue other projects) but a big one was slowly coming to doubt that.
			  I could be sold on the idea that Cyc or something Cyc-like could be a piece of the puzzle for AGI.
			  
			  I say "Cyc-like" because my personal opinion is that the actual Cyc system is struggling under 30-odd years of rapidly accruing technical debt and while it can do some impressive things, it doesn't represent the full potential of something that could be built using the lessons learned along the way.
			  
			  But the longer I worked there the more I felt like the plan was basically:
			  
			  1. Manually add more and more common-sense knowledge and extend the inference engine
			  
			  2. ???
			  
			  3. AGI!
		- Customers?
			- There are companies that use Cyc as part of processes for avoiding certain kinds of risks and the financial impact (by the company's estimation, not Cycorp's) is an unfathomably large amount of money. The thing I'm thinking of seems like something Cyc (or something Cyc-like) is relatively uniquely suited for.
			- Really when it comes to practical applications using Cyc, there are three alternatives to consider and only two of them actually exist.
				- 1. There are custom domain specific solutions, involving tailored (limited) inference engines and various kinds of smart databases.
				  
				  2. There's Cyc.
				  
				  3. There's a hypothetical future Cyc-like inference system that isn't burdened by 30 years of technical debt.
			- I personally suspect that some of Cycorp's clients would do better with domain-specific solutions because they don't realize how much of their problem could be solved that way and how much of the analysis coming from Cyc is actually the result of subject matter experts effectively building domain-specific solutions the hard way inside of Cyc. With a lot of Cycorp projects, it's hard to point your finger at exactly where the "AI" is happening.
			- There are some domains where you just need more inferential power and to leverage the years and years of background knowledge that's already in Cyc. Even then I sometimes used to wonder about the cost/effort effectiveness of using something as powerful and complicated as Cyc when a domain-specific solution might do 90% as well with half the effort.
			- From a business point of view is that it's a kind of artificial analyst sitting between you and a database. The database has a bunch of numbers and strings and stuff in a schema to represent facts. You can query the database. But you can ask an analyst much broader questions that require outside knowledge and deeper semantic understanding of the implications of the kinds of facts in the database, and then they go figure out what queries to make in order to answer your question - Cyc sort of does that job.
			- (lots of data, lots of basic inference required using common sense knowledge) that other companies weren't prepared to do. Some clients found Cyc enormously useful in that regard, others were frustrated by the complexity of the system.
			- The degree to which it's effective seemed to me to be a case-by-case thing. While working there I tended to suspect that Cyc people underestimated the degree to which you could get a large fraction of their results using something like Datomic and it was an open question (to me at least) whether the extra 10% or whatever was worth how much massively more complicated it is to work with Cyc.
			- Part of the tension of the company was a distinction between their long term project and the work that they did to pay the bills. The long term goal was something like, to eventually accumulate enough knowledge to create something that could be the basis for a human-ish AI... businesses rarely show up wanting to pay you for doing that directly.
		- Funding?
			- One-off contracts, sometimes with ongoing licenses, from various large organizations who have use cases for inference. We did a lot of government contracting for a while; now we mostly stay in the private sector.
			- The money situation has changed over the years, and they've had times where things have boomed or busted - it's been a while since I left but I think they're still in a "boom" phase. There are a lottt more projects with different companies or organizations than the ones listed on the wiki, but they tend to be pretty secretive and I won't name names.
			  The categories of projects that I was familiar with were basically proof of concept work for companies or government R&D contracts. There are lots of big companies that will throw a few million at a long-shot AI project just to see if it pays off, even if they don't always have a very clear idea of what they ultimately want or a concrete plan to build a product around it. Sometimes these would pay off, sometimes they wouldn't but we'd get by on the initial investment for proof of concept work. Similarly, organizations like DARPA will fund multiple speculative projects around a similar goal (e.g. education - that's where "Mathcraft" came from IIRC) to evaluate the most promising direction.
			- There have been a few big hits in the company's history, most of which I can't talk about. The hits have basically been in very circumscribed knowledge domains where there's a lot of data, a lot of opportunity for simple common sense inferences (e.g. if Alice worked for the ABC team of company A at the same time Bob worked for the XYZ team of company B and companies A and B were collaborating on a project involving the ABC and XYZ teams at that same time, then Alice and Bob have probably met) and you have reason to follow all those connections looking for patterns, but it's just too much data for a human to make a map of. Cyc can answer questions about probable business or knowledge relationships between individuals in large sets of people in a few seconds, which would be weeks of human research and certain institutions pay a high premium for that kind of thing.
	- ✅[Doug Lenat, 1950-2023 - by Gary Marcus - Marcus on AI](https://garymarcus.substack.com/p/doug-lenat-1950-2023)
	  collapsed:: true
		- Over the last year, Doug and I tried to write a long, complex paper that we never got to finish. Cyc was both awesome in its scope, and unwieldy in its implementation. The biggest problem with Cyc from an academic perspective is that it’s proprietary. To help more people understand it, I tried to bring out of him what lessons he learned from Cyc, for a future generation of researchers to use. Why did it work as well as it did when it did, why did fail when it did, what was hard to implement, and what did he wish that he had done differently? We had nearly 40,000 words, sprawling, not yet fully organized, yet filled with wisdom. It was part science, part oral history. Needless to say, it takes a long time to organize and polish something of that length. In between our other commitments, we were making slow but steady progress. And then in the new year, I got busy with AI policy, and he got sick; progress slowed. Closer to the end, he wrote a shorter, tighter paper, building in part on the work we had done together. When he realized that he did not have much time left, we agreed that I would help polish the shorter manuscript, a junior partner in what we both knew would likely be his last paper.
		  
		  One of his last emails to me, about six weeks ago, was an entreaty to get the paper out ASAP; on July 31, after a nerve-wracking false-start, it came out, on arXiv.
	- ✅[AMMDI: alpha ontologist](https://hyperphor.com/ammdi/alpha-ontologist) (2023)
	  collapsed:: true
		- I came up with the phrase "alpha ontologist" during a short stint working with Doug Lenat's Cyc project. At the time, they were trying to encode all of botany and had a small staff of professional botanists doing knowledge entry. Naturally it was quite difficult for the botanists to try to translate their knowledge into the formalisms required by Cyc, and they would regularly puzzle over various questions (I wish I had written some of these down) and if they could not come to a consensus, would have to take it before the Master, Doug Lenat, who would think for a bit, maybe draw some diagrams on a whiteboard, and come up with the Right Representation.
	- ✅[Doug Lenat has died | Hacker News](https://news.ycombinator.com/item?id=37354000) (2023-09)
	  collapsed:: true
		- I worked with Cyc. It was an impressive attempt to do the thing that it does, but it didn't work out. It was the last great attempt to do AI in the "neat" fashion, and its failure helped bring about the current, wildly successful "scruffy" approaches to AI.
		  It's failure is no shade against Doug. Somebody had to try it, and I'm glad it was one of the brightest guys around. I think he clung on to it long after it was clear that it wasn't going to work out, but breakthroughs do happen. (The current round of machine learning itself is a revival of a technique that had been abandoned, but people who stuck with it anyway discovered the tricks that made it go.)
		- The goal was that in a decade it would become self-sustaining. It would have enough knowledge that it could start reading natural language. And it just... didn't.
		  Contrast it with LLMs and diffusion and such... those same models do a scary job of passing the Turing Test. Nobody would ever have thought to try it on Cyc. It was never anywhere close.
		  Philosophically I can't say why Cyc never developed "magic" and LLMs (seemingly) do. And I'm still not convinced that they're on the right path, though they actually have some legitimate usages right now. I tried to find uses for Cyc in exactly the opposite direction, guaranteeing data quality, but it turned out nobody really wanted that.
		- As far as I can tell it was more of an aspiration than a product. I worked with a consulting firm that tried to get into AI a few years back and chose Cyc as the platform they wanted to sell to (mostly financial) clients. I don't think a single project ever even started nor was there a clear picture of what could be sold... I think Cyc was massively oversold despite never doing much of anything useful.
		- Unfortunately visiting cyc.com, I only see a bunch of business BS and the "Documention" page shows nothing without logging in.
		- Worked with their ontologists for a couple of years. Someone once told me that they employed more philosophers per capita than any other software company. A dubious distinction, maybe. But it describes the culture of inquisitiveness there pretty well too
	- ✅[Remembering Doug Lenat and his quest to capture the world with logic | Hacker News](https://news.ycombinator.com/item?id=37402925) (2023-09)
	  collapsed:: true
		- it's become clear that it probably isn't the road to AGI, but it still employs people who are still encoding rules and making the inference engine faster, paying the bills mostly by doing contracts from companies that want someone to make sense of their data warehouses
		  They did primarily government contracts for a long time, but when I was there (2016-2020) it was all private contracts
		  The contracts at the time were mostly skunkworks/internal to the client companies, so not usually highly publicized.
		- I've always wanted CYC, or something like it, to be correct. Like somehow it'd fulfill my need for the universe to be knowable, legible. If human reason & logic could be encoded, then maybe things could start to make sense, if only we try hard enough.  Alas.  Back when SemanticWeb was the hotness, I was a firm ontology partisan. After working on customer's use cases, and given enough time to work thru the stages of grief, I grudgingly accepted the folksonomy worldview is probably true... To this day, statistics based approaches make me uncomfortable, perhaps even anxious.
		- Lenat was my assigned advisor when I started my Masters at Stanford. I met with him once and he gave me some advice on classes. After that he was extremely difficult to schedule a meeting with (for any student, not just me). He didn't get tenure and left to join MCC after that year. I don't think I ever talked to him again after the first meeting. He was extremely smart, charismatic, and a bit arrogant (but a well-founded arrogance)... In the mid-80s I took his thesis and tried to implement AM on a more modern framework, but the thesis lacked so many details about how it worked that I was unable to even get started implementing anything.
		  One comment from his thesis advisors on AM was that they couldn't tell which part was performed by AM and which part was guided by Lenat. I think that comment holds for both AM and EURISKO.
		- I briefly looked into it many moons ago when I was a Ph.D. student working in the area of computational semantics in 2006-10. 
		  
		  The first stumbling block was that CYC wasn't openly available. Their research group was very insular, and they were very protective of their IP, hoping to pay for their work through licensing deals and industry or academic collaborations that could funnel money their way.
		  
		  They had a subset called "OpenCYC" though, which they released more publicly in the hope of drawing more attention. I tried using that, but soon got frustrated with the software. The representation was in a CYC-specific language called "CycL" and the inference engine was CYC-specific as well and based on a weird description logic specifically invented for CYC. So you couldn't just hook up a first-order theorem prover or anything like that. And "description logic" is a polite term for what their software did. It seemed mostly designed as a workaround to the fact that open-ended inferencing of the kind they spoke of to motivate their work would have depended way too frequently on factoids of common sense knowledge that were missing from the knowledge base. I got frustrated with that software very quickly and eventually gave up.
		- I played with OpenCyc once. It was quite hard to use because you had to learn things like CycL and I couldn't get their natural language processing module to work. The knowledge base was impressively huge but it also took a lot of work to learn because at the lower levels it was extremely abstract. A lot of the assertions in the KB were establishing very low level stuff that only made sense if you were really into abstract logic or philosophy. They made bold claims on their website for what it could do, but I could never reproduce them. There was supposedly a more advanced version called ResearchCyc though, which I didn't have access to.
	- ✅[Cyc: History's Forgotten AI Project | Hacker News](https://news.ycombinator.com/item?id=40069298) (2024-04)
	  collapsed:: true
		- I was one of the first hires on the Cyc project when it started at MCC and was at first responsible for the decision to abandon the Interlisp-D implementation and replace it with one I wrote on Symbolics machines.
		  
		  Yes, back then one person could write the code base, which has long since grown and been ported off those machines. The KB is what matters anyway. I built it so different people could work on the kb simultaneously, which was unusual in those days, even though cloud computing was ubiquitous at PARC (where Doug had been working, and I had too).
		  
		  Neurosymbolic approaches are pretty important and there’s good work going on in that area. I was back in that field myself until I got dragged away to work on the climate. But I’m not sure that manually curated KBs will make much of a difference beyond bootstrapping.
		- Allegro has an amazing UI and debugger. Like seriously, every alternative is janky experience that should be embarrassed to exist.
		- I used to volunteer inputting data into Cyc back in the day. And I get massive déjà vu with current LLM's. I remember that the system ended up with an obsession with HVAC systems lol.
		- Cyc was an interesting project - you might consider it as the ultimate scaling experiment in expert systems... The company is still around, but from what people who've worked there have said, it seems as if the original goal is all but abandoned (although Lenat might have disagreed, and seemed eternally optimistic, at least in public). It seems they survive on private contracts for custom systems premised on the power of Cyc being brought to bear, when in reality these projects could be accomplished in simpler ways.
	- https://www.dwerden.com/forum/forum/euphonium-tuba-and-general-music/general-music-discussion/general-discussion-of-anything/13169-is-anyone-else-afraid-of-how-ai-might-be-used?p=114481#post114481 (2024-01-06)
		- When I first started working for Glaxo Wellcome in 1997 as a "knowledge engineer" I was heavily involved in efforts to make use of the Cyc system (https://cyc.com/) for use in scientific information retrieval, and was working closely with the Cyc engineers, linguists, and scientists to develop prototype AI software for use in drug discovery and bioinformatics.
	- [Gwern comments on "Getting from Generative AI to Trustworthy AI"](https://www.reddit.com/r/MachineLearning/comments/1974yoo/comment/khz22y8/) (2024-01-15)
		- If you read that paper, Lenat explains how the original dream of Cyc failed and now it's just a big toolkit of highly-specialized hand-written experts tailored to each problem; they don't even use the original general theorem-proving stuff anymore. I was shocked to read it - I'd assume Cyc failed for obvious reasons but that it at least still did all the original general logic stuff and got some utility out of it. But no, they turned it off ages ago because it was useless even in Cyc.
- ✅[ABBYY's Bitter Lesson: How Linguists Lost the Last Battle for NLP - System Block](https://sysblok.ru/blog/gorkij-urok-abbyy-kak-lingvisty-proigrali-poslednjuju-bitvu-za-nlp/) [@skorinkinABBYYsBitterLesson2024]: a parallel to Cyc?
  collapsed:: true
	- By the early 2010s, ABBYY found itself in a situation where the development costs for Compreno had reached $80 million, and the market it was supposed to enter had been captured by statistical translators. At the same time, it cannot be said that the system failed: it worked and sometimes impressed with the filigree of translation, provided by a subtle and precise description of individual fragments of the language. On the Internet, you can still dig up evidence of how Compreno with elements of cherry-picking examples amazed individual journalists. And most importantly, Compreno became the favorite brainchild of a huge number of people who invested their labor and their intellect into it. No one in the company wanted to close this project. But ABBYY had no chance to compete with Google Translate.
	- The company decided to do what is called a pivot in modern corporate parlance. ABBYY switched from translation to information retrieval tasks (not on the Internet, but in corporate archives) and extracting information from text. The company's management decided that such an advanced linguistic processor, which ABBYY NLC / Compreno had become by that time, would allow it to overtake competitors in these areas, where things are not so sweet with training data.
	- These attempts continued throughout the 2010s, and here I was already a personal witness and accomplice to what was happening. We had customers who needed, for example, to extract data on transaction participants from document scans in which the text was written in a kind of "legal dialect" of American English. When this text (with recognition errors, extra dots due to breadcrumbs on the scan and other artifacts) flew into the sophisticated NLC / Compreno analyzer, the output was most often an absolutely unpredictable mess with a bunch of messages about parsing errors... The variety of syntactic-semantic structures was almost greater than the (comparatively more predictable) variety of simple word chains of the source text. At some point, I realized that most of the time I was engaged in a war with Compreno output using regular expressions and other crutches, and I thought that I needed to leave ABBYY. I finally quit in the winter of 2017.
	- After leaving the company, I once took HSE computer linguistics students on a tour of ABBYY. I remember well how we climbed up to a large office balcony with a view of the entire north of Moscow. One of the students, Pasha, joked that ABBYY employees climb up there during a thunderstorm and shout “I’m making a correct parser in 2018,” after which lightning strikes them. It was a cruel joke, but it hit the mark.
	- Surprisingly, attempts to use Compreno did not stop at ABBYY until the very end of its existence. Even when the triumphant march of neural networks on transformer architecture began in 2017-2018, which gave rise to today's triumph of large language models, ABBYY continued to cling to this "suitcase without a handle", trying to combine the handwritten language model of Compreno and neural network approaches. And they probably would have continued further, if not for 2022.
- [About Us - Cyc](https://cyc.com/about-us/)
  collapsed:: true
	- Cycorp is the world’s leading provider of Machine Reasoning AI. The Cyc platform combines an unparalleled common sense ontology and knowledge base with a powerful reasoning engine and natural language interfaces for its vertical enterprise products and use by third party developers.
	- Cyc is uniquely suited to create value for enterprise.  Out-of-the-box capabilities developed with hundreds of millions of R&D investment over the course of three-plus decades can address specific use cases, such as Hospital Operations or Supply Chain, or be the foundation for an enterprise Knowledge Layer.
- [Technology | Lucid.AI](https://lucid.ai/technology/)
  collapsed:: true
	- Lucid.AI goes far beyond other AI systems that rely only on massively parallel algorithms, pattern matching and statistical methodologies to create the illusion of intelligence. Lucid.AI acquires knowledge, insight, and understanding the same way humans do, through evidence, experience, and reasoning. In human terms, Lucid.AI represents the “left brain” deep knowledge-based functions that are lacking in the shallow “right brain” approaches of pattern matching, probability-based AI systems.
	- Lucid.AI has been trained to understand how the world really works. Because it shares a human perspective, it can make human-like qualitative deductions, not just quantitative calculations.  It took more than 30 years to build such an intricate reasoning platform.  Just as it takes more than two decades of real-world life experiences and schooling for a human to acquire knowledge, understanding, competence, and mastery. Lucid.AI has been learning, building, testing, and proving its knowledge bases for more than three decades. It is now ready to apply its unique strengths to solving the most complicated problems in the business world.  What does common sense look like? This visualization of our knowledge base reveals the core structural connections between more than half a million concepts in the Lucid.AI knowledge base. These relationships represent just a small fraction of the tens of thousands in use that enable integration with external sources of data.
- [DBpedia 2015-10 | DBpedia – Linked Data Fragments](https://fragments.dbpedia.org/2015-10/en?object=http%3A%2F%2Fdbpedia.org%2Fresource%2FArmy_of_the_Cumberland)
- the double structure of argument
  collapsed:: true
	- | technical statement | moral coloring |
	  |-----------|-------|
	  | the No Free Lunch Hypothesis | we are hardworking, you are lazy |
	  | there is no "Maxwell's Equations of Thought" | we are self-assured, you suffer from physics-envy |
	  | the Empirical Inquiry Hypothesis; Cyc is unaesthetic; we are building the Cyc profitably, not publishing academic papers | we are strong engineers that get things done, you are weak aesthetes playing the academic game |
	  | the Physical Symbol System Hypothesis | we are building real intelligence, you are just playing with robots |
	  | the Breadth Hypothesis | our systems are intelligent, yours are idiot savants |
	  | the Explicit Knowledge Principle | our systems understand deeply, yours pattern-match shallowly |
	  | we think you are putting pattern-matchers in places that require deep understanding | we are trustworthy, you are reckless |
	  | we believe the Cyc is the only current effort towards AGI | we are ambitious, you are academic careerists |
	  | writing the Cyc costs a lot and is unpopular with the academia | we rebel and think freely, you follow the crowd |
	  | Cycorp hires anyone -- including high school dropouts -- good at encoding common sense | we are egalitarian, you are elitists |
	  | Cycorp has always had just ~50 people, and is mostly forgotten now | we are the elect, you will see |