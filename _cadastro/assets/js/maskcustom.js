function handleMask(event, mask) {
    with (event) {
        stopPropagation()
        preventDefault()
        if (!which) return
        var c = String.fromCharCode(which)
        if (c.match(/\D/)) return
        // var c = data;
        with (target) {
            var val = value;
            var pos = selectionStart;
        }
    }
    var nan = count(val, /\D/, pos) // nan va calcolato prima di eliminare i separatori
    val = val.replace(/\D/g,'')
    var mask = mask.match(/^(\D*)(.+9)(\D*)$/)
    console.log(val.length, count(mask[2],/9/));
    if (!mask) return // meglio exception?
    if (val.length > count(mask[2], /9/)) {
        return
    }

    for (var txt='', im=0, iv=0; im<mask[2].length && iv<val.length; im+=1) {
        var c = mask[2].charAt(im)
        txt += c.match(/\D/) ? c : val.charAt(iv++)
    }

    with (event.target) {
        value = mask[1] + txt + mask[3]
        selectionStart = selectionEnd = pos + (pos==1 ? mask[1].length : count(value, /\D/, pos) - nan)
    }

    function count(str, c, e) {
        e = e || str.length
        for (var n=0, i=0; i<e; i+=1) if (str.charAt(i).match(c)) n+=1
        return n
    }
}