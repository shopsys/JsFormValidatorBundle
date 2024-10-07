import '../FpJsFormValidator';
import SymfonyComponentValidatorConstraintsRange from './Range';

const constraintsRange = new SymfonyComponentValidatorConstraintsRange();
constraintsRange.maxMessage = 'max error';
constraintsRange.minMessage = 'min error';
constraintsRange.notInRangeMessage = 'not in range error';
constraintsRange.invalidMessage = 'invalid';

test.each([
    [1, 1, 1, []],
    [1, 5, 3, []],
    [1, 1, 'a', ['invalid']],
    [1, 5, 6, ['not in range error']],
    [undefined, 5, 6, ['max error']],
    [5, undefined, 3, ['min error']],
])(
    'SymfonyComponentValidatorConstraintsRange',
    (min, max, value, expected) => {
        constraintsRange.min = min;
        constraintsRange.max = max;
        expect(constraintsRange.validate(value)).toStrictEqual(expected);
    },
);

