const { isAccessDataValid, decodePassword } = require('../../js/access-utils');

describe('access form helpers', () => {
  test('accepts correct credentials', () => {
    expect(
      isAccessDataValid({
        pws: 'Th15_15_5TR0n6',
        srt: '1352',
        fName: 'Anna',
      })
    ).toBe(true);
  });

  test('rejects missing name', () => {
    expect(
      isAccessDataValid({
        pws: 'Th15_15_5TR0n6',
        srt: '1352',
        fName: '   ',
      })
    ).toBe(false);
  });

  test('decodes the expected password string', () => {
    expect(decodePassword('VGgxNV8xNV81VFIwbjY')).toBe('Th15_15_5TR0n6');
  });
});
