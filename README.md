A number chain is created by continuously adding the square of the digits in a number to form a new number until it has been seen before.

For example,
85 → 89 → 145 → 42 → 20 → 4 → 16 → 37 → 58 → 89
44 → 32 → 13 → 10 → 1 → 1

Example break down:
44 breaks down to (4² + 4²) → 32, which then breaks down to (3² + 2²) → 13

Therefore any chain that arrives at 1 or 89 will become stuck in an endless loop. What is most amazing is that EVERY starting number will eventually arrive at 1 or 89.

How many starting numbers below one hundred thousand (100,000) will arrive at 89?

Solution is written in PHP

Answer to the question... 85,623
