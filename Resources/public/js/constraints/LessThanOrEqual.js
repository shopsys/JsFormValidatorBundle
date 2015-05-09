//noinspection JSUnusedGlobalSymbols
/**
 * Checks if value is less than or equal to the predefined value
 * @constructor
 * @author dev.ymalcev@gmail.com
 */
function SymfonyComponentValidatorConstraintsLessThanOrEqual() {
    this.message = '';
    this.value = null;

    this.validate = function (value) {
        var f = FpJsFormValidator;
        if (f.isValueEmty(value) || value <= this.value) {
            return [];
        } else {
            return [
                this.message
                    .replace('{{ value }}', String(value))
                    .replace('{{ compared_value }}', String(this.value))
            ];
        }
    }
}
