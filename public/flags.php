<?php

declare(strict_types=1);

use Html\AppWebPage;

$webPage = new AppWebPage('Gestion des données de session - liste de pays');

$webPage->
appendContent(
    <<<HTML
<div id="country-list">
    <img src="/img/flags/af.png" alt="Flag af">
    <img src="/img/flags/za.png" alt="Flag za">
    <img src="/img/flags/al.png" alt="Flag al">
    <img src="/img/flags/dz.png" alt="Flag dz">
    <img src="/img/flags/de.png" alt="Flag de">
    <img src="/img/flags/ad.png" alt="Flag ad">
    <img src="/img/flags/ao.png" alt="Flag ao">
    <img src="/img/flags/ai.png" alt="Flag ai">
    <img src="/img/flags/aq.png" alt="Flag aq">
    <img src="/img/flags/ag.png" alt="Flag ag">
    <img src="/img/flags/sa.png" alt="Flag sa">
    <img src="/img/flags/ar.png" alt="Flag ar">
    <img src="/img/flags/am.png" alt="Flag am">
    <img src="/img/flags/aw.png" alt="Flag aw">
    <img src="/img/flags/au.png" alt="Flag au">
    <img src="/img/flags/at.png" alt="Flag at">
    <img src="/img/flags/az.png" alt="Flag az">
    <img src="/img/flags/bs.png" alt="Flag bs">
    <img src="/img/flags/bh.png" alt="Flag bh">
    <img src="/img/flags/bd.png" alt="Flag bd">
    <img src="/img/flags/bb.png" alt="Flag bb">
    <img src="/img/flags/be.png" alt="Flag be">
    <img src="/img/flags/bz.png" alt="Flag bz">
    <img src="/img/flags/bj.png" alt="Flag bj">
    <img src="/img/flags/bm.png" alt="Flag bm">
    <img src="/img/flags/bt.png" alt="Flag bt">
    <img src="/img/flags/by.png" alt="Flag by">
    <img src="/img/flags/mm.png" alt="Flag mm">
    <img src="/img/flags/bo.png" alt="Flag bo">
    <img src="/img/flags/ba.png" alt="Flag ba">
    <img src="/img/flags/bw.png" alt="Flag bw">
    <img src="/img/flags/br.png" alt="Flag br">
    <img src="/img/flags/bn.png" alt="Flag bn">
    <img src="/img/flags/bg.png" alt="Flag bg">
    <img src="/img/flags/bf.png" alt="Flag bf">
    <img src="/img/flags/bi.png" alt="Flag bi">
    <img src="/img/flags/kh.png" alt="Flag kh">
    <img src="/img/flags/cm.png" alt="Flag cm">
    <img src="/img/flags/ca.png" alt="Flag ca">
    <img src="/img/flags/cv.png" alt="Flag cv">
    <img src="/img/flags/cl.png" alt="Flag cl">
    <img src="/img/flags/cn.png" alt="Flag cn">
    <img src="/img/flags/cy.png" alt="Flag cy">
    <img src="/img/flags/co.png" alt="Flag co">
    <img src="/img/flags/km.png" alt="Flag km">
    <img src="/img/flags/kp.png" alt="Flag kp">
    <img src="/img/flags/kr.png" alt="Flag kr">
    <img src="/img/flags/cr.png" alt="Flag cr">
    <img src="/img/flags/ci.png" alt="Flag ci">
    <img src="/img/flags/hr.png" alt="Flag hr">
    <img src="/img/flags/cu.png" alt="Flag cu">
    <img src="/img/flags/cw.png" alt="Flag cw">
    <img src="/img/flags/dk.png" alt="Flag dk">
    <img src="/img/flags/dj.png" alt="Flag dj">
    <img src="/img/flags/dm.png" alt="Flag dm">
    <img src="/img/flags/eg.png" alt="Flag eg">
    <img src="/img/flags/ae.png" alt="Flag ae">
    <img src="/img/flags/ec.png" alt="Flag ec">
    <img src="/img/flags/er.png" alt="Flag er">
    <img src="/img/flags/es.png" alt="Flag es">
    <img src="/img/flags/ee.png" alt="Flag ee">
    <img src="/img/flags/sz.png" alt="Flag sz">
    <img src="/img/flags/fm.png" alt="Flag fm">
    <img src="/img/flags/us.png" alt="Flag us">
    <img src="/img/flags/et.png" alt="Flag et">
    <img src="/img/flags/fj.png" alt="Flag fj">
    <img src="/img/flags/fi.png" alt="Flag fi">
    <img src="/img/flags/fr.png" alt="Flag fr">
    <img src="/img/flags/ga.png" alt="Flag ga">
    <img src="/img/flags/gm.png" alt="Flag gm">
    <img src="/img/flags/ge.png" alt="Flag ge">
    <img src="/img/flags/gs.png" alt="Flag gs">
    <img src="/img/flags/gh.png" alt="Flag gh">
    <img src="/img/flags/gi.png" alt="Flag gi">
    <img src="/img/flags/gr.png" alt="Flag gr">
    <img src="/img/flags/gd.png" alt="Flag gd">
    <img src="/img/flags/gl.png" alt="Flag gl">
    <img src="/img/flags/gp.png" alt="Flag gp">
    <img src="/img/flags/gu.png" alt="Flag gu">
    <img src="/img/flags/gt.png" alt="Flag gt">
    <img src="/img/flags/gg.png" alt="Flag gg">
    <img src="/img/flags/gn.png" alt="Flag gn">
    <img src="/img/flags/gq.png" alt="Flag gq">
    <img src="/img/flags/gw.png" alt="Flag gw">
    <img src="/img/flags/gy.png" alt="Flag gy">
    <img src="/img/flags/gf.png" alt="Flag gf">
    <img src="/img/flags/ht.png" alt="Flag ht">
    <img src="/img/flags/hn.png" alt="Flag hn">
    <img src="/img/flags/hk.png" alt="Flag hk">
    <img src="/img/flags/hu.png" alt="Flag hu">
    <img src="/img/flags/bv.png" alt="Flag bv">
    <img src="/img/flags/cx.png" alt="Flag cx">
    <img src="/img/flags/im.png" alt="Flag im">
    <img src="/img/flags/nf.png" alt="Flag nf">
    <img src="/img/flags/ax.png" alt="Flag ax">
    <img src="/img/flags/ky.png" alt="Flag ky">
    <img src="/img/flags/cc.png" alt="Flag cc">
    <img src="/img/flags/ck.png" alt="Flag ck">
    <img src="/img/flags/fo.png" alt="Flag fo">
    <img src="/img/flags/hm.png" alt="Flag hm">
    <img src="/img/flags/mp.png" alt="Flag mp">
    <img src="/img/flags/mh.png" alt="Flag mh">
    <img src="/img/flags/um.png" alt="Flag um">
    <img src="/img/flags/pn.png" alt="Flag pn">
    <img src="/img/flags/sb.png" alt="Flag sb">
    <img src="/img/flags/tc.png" alt="Flag tc">
    <img src="/img/flags/vg.png" alt="Flag vg">
    <img src="/img/flags/vi.png" alt="Flag vi">
    <img src="/img/flags/in.png" alt="Flag in">
    <img src="/img/flags/id.png" alt="Flag id">
    <img src="/img/flags/iq.png" alt="Flag iq">
    <img src="/img/flags/ir.png" alt="Flag ir">
    <img src="/img/flags/ie.png" alt="Flag ie">
    <img src="/img/flags/is.png" alt="Flag is">
    <img src="/img/flags/il.png" alt="Flag il">
    <img src="/img/flags/it.png" alt="Flag it">
    <img src="/img/flags/jm.png" alt="Flag jm">
    <img src="/img/flags/jp.png" alt="Flag jp">
    <img src="/img/flags/je.png" alt="Flag je">
    <img src="/img/flags/jo.png" alt="Flag jo">
    <img src="/img/flags/kz.png" alt="Flag kz">
    <img src="/img/flags/ke.png" alt="Flag ke">
    <img src="/img/flags/kg.png" alt="Flag kg">
    <img src="/img/flags/ki.png" alt="Flag ki">
    <img src="/img/flags/kw.png" alt="Flag kw">
    <img src="/img/flags/re.png" alt="Flag re">
    <img src="/img/flags/la.png" alt="Flag la">
    <img src="/img/flags/ls.png" alt="Flag ls">
    <img src="/img/flags/lv.png" alt="Flag lv">
    <img src="/img/flags/lb.png" alt="Flag lb">
    <img src="/img/flags/lr.png" alt="Flag lr">
    <img src="/img/flags/ly.png" alt="Flag ly">
    <img src="/img/flags/li.png" alt="Flag li">
    <img src="/img/flags/lt.png" alt="Flag lt">
    <img src="/img/flags/lu.png" alt="Flag lu">
    <img src="/img/flags/mo.png" alt="Flag mo">
    <img src="/img/flags/mk.png" alt="Flag mk">
    <img src="/img/flags/mg.png" alt="Flag mg">
    <img src="/img/flags/my.png" alt="Flag my">
    <img src="/img/flags/mw.png" alt="Flag mw">
    <img src="/img/flags/mv.png" alt="Flag mv">
    <img src="/img/flags/ml.png" alt="Flag ml">
    <img src="/img/flags/fk.png" alt="Flag fk">
    <img src="/img/flags/mt.png" alt="Flag mt">
    <img src="/img/flags/ma.png" alt="Flag ma">
    <img src="/img/flags/mq.png" alt="Flag mq">
    <img src="/img/flags/mu.png" alt="Flag mu">
    <img src="/img/flags/mr.png" alt="Flag mr">
    <img src="/img/flags/yt.png" alt="Flag yt">
    <img src="/img/flags/mx.png" alt="Flag mx">
    <img src="/img/flags/md.png" alt="Flag md">
    <img src="/img/flags/mc.png" alt="Flag mc">
    <img src="/img/flags/mn.png" alt="Flag mn">
    <img src="/img/flags/me.png" alt="Flag me">
    <img src="/img/flags/ms.png" alt="Flag ms">
    <img src="/img/flags/mz.png" alt="Flag mz">
    <img src="/img/flags/na.png" alt="Flag na">
    <img src="/img/flags/nr.png" alt="Flag nr">
    <img src="/img/flags/np.png" alt="Flag np">
    <img src="/img/flags/ni.png" alt="Flag ni">
    <img src="/img/flags/ne.png" alt="Flag ne">
    <img src="/img/flags/ng.png" alt="Flag ng">
    <img src="/img/flags/nu.png" alt="Flag nu">
    <img src="/img/flags/no.png" alt="Flag no">
    <img src="/img/flags/nc.png" alt="Flag nc">
    <img src="/img/flags/nz.png" alt="Flag nz">
    <img src="/img/flags/om.png" alt="Flag om">
    <img src="/img/flags/ug.png" alt="Flag ug">
    <img src="/img/flags/uz.png" alt="Flag uz">
    <img src="/img/flags/pk.png" alt="Flag pk">
    <img src="/img/flags/pw.png" alt="Flag pw">
    <img src="/img/flags/ps.png" alt="Flag ps">
    <img src="/img/flags/pa.png" alt="Flag pa">
    <img src="/img/flags/pg.png" alt="Flag pg">
    <img src="/img/flags/py.png" alt="Flag py">
    <img src="/img/flags/nl.png" alt="Flag nl">
    <img src="/img/flags/bq.png" alt="Flag bq">
    <img src="/img/flags/pe.png" alt="Flag pe">
    <img src="/img/flags/ph.png" alt="Flag ph">
    <img src="/img/flags/pl.png" alt="Flag pl">
    <img src="/img/flags/pf.png" alt="Flag pf">
    <img src="/img/flags/pr.png" alt="Flag pr">
    <img src="/img/flags/pt.png" alt="Flag pt">
    <img src="/img/flags/qa.png" alt="Flag qa">
    <img src="/img/flags/eh.png" alt="Flag eh">
    <img src="/img/flags/cf.png" alt="Flag cf">
    <img src="/img/flags/cd.png" alt="Flag cd">
    <img src="/img/flags/do.png" alt="Flag do">
    <img src="/img/flags/cg.png" alt="Flag cg">
    <img src="/img/flags/ro.png" alt="Flag ro">
    <img src="/img/flags/gb.png" alt="Flag gb">
    <img src="/img/flags/ru.png" alt="Flag ru">
    <img src="/img/flags/rw.png" alt="Flag rw">
    <img src="/img/flags/bl.png" alt="Flag bl">
    <img src="/img/flags/kn.png" alt="Flag kn">
    <img src="/img/flags/sm.png" alt="Flag sm">
    <img src="/img/flags/sx.png" alt="Flag sx">
    <img src="/img/flags/mf.png" alt="Flag mf">
    <img src="/img/flags/pm.png" alt="Flag pm">
    <img src="/img/flags/va.png" alt="Flag va">
    <img src="/img/flags/vc.png" alt="Flag vc">
    <img src="/img/flags/sh.png" alt="Flag sh">
    <img src="/img/flags/lc.png" alt="Flag lc">
    <img src="/img/flags/sv.png" alt="Flag sv">
    <img src="/img/flags/ws.png" alt="Flag ws">
    <img src="/img/flags/as.png" alt="Flag as">
    <img src="/img/flags/st.png" alt="Flag st">
    <img src="/img/flags/sn.png" alt="Flag sn">
    <img src="/img/flags/rs.png" alt="Flag rs">
    <img src="/img/flags/sc.png" alt="Flag sc">
    <img src="/img/flags/sl.png" alt="Flag sl">
    <img src="/img/flags/sg.png" alt="Flag sg">
    <img src="/img/flags/sk.png" alt="Flag sk">
    <img src="/img/flags/si.png" alt="Flag si">
    <img src="/img/flags/so.png" alt="Flag so">
    <img src="/img/flags/sd.png" alt="Flag sd">
    <img src="/img/flags/ss.png" alt="Flag ss">
    <img src="/img/flags/lk.png" alt="Flag lk">
    <img src="/img/flags/se.png" alt="Flag se">
    <img src="/img/flags/ch.png" alt="Flag ch">
    <img src="/img/flags/sr.png" alt="Flag sr">
    <img src="/img/flags/sj.png" alt="Flag sj">
    <img src="/img/flags/sy.png" alt="Flag sy">
    <img src="/img/flags/tj.png" alt="Flag tj">
    <img src="/img/flags/tw.png" alt="Flag tw">
    <img src="/img/flags/tz.png" alt="Flag tz">
    <img src="/img/flags/td.png" alt="Flag td">
    <img src="/img/flags/cz.png" alt="Flag cz">
    <img src="/img/flags/tf.png" alt="Flag tf">
    <img src="/img/flags/io.png" alt="Flag io">
    <img src="/img/flags/th.png" alt="Flag th">
    <img src="/img/flags/tl.png" alt="Flag tl">
    <img src="/img/flags/tg.png" alt="Flag tg">
    <img src="/img/flags/tk.png" alt="Flag tk">
    <img src="/img/flags/to.png" alt="Flag to">
    <img src="/img/flags/tt.png" alt="Flag tt">
    <img src="/img/flags/tn.png" alt="Flag tn">
    <img src="/img/flags/tm.png" alt="Flag tm">
    <img src="/img/flags/tr.png" alt="Flag tr">
    <img src="/img/flags/tv.png" alt="Flag tv">
    <img src="/img/flags/ua.png" alt="Flag ua">
    <img src="/img/flags/uy.png" alt="Flag uy">
    <img src="/img/flags/vu.png" alt="Flag vu">
    <img src="/img/flags/ve.png" alt="Flag ve">
    <img src="/img/flags/vn.png" alt="Flag vn">
    <img src="/img/flags/wf.png" alt="Flag wf">
    <img src="/img/flags/ye.png" alt="Flag ye">
    <img src="/img/flags/zm.png" alt="Flag zm">
    <img src="/img/flags/zw.png" alt="Flag zw">
</div>

HTML
);

echo $webPage->
toHTML();
