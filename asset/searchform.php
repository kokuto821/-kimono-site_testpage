<div class="yellow-midashi_wrapper">
    <h2 class="yellow-midashi mid-txt">
        <span class="search-icon"><img src="<?php bloginfo('template_url'); ?>/image/search.png" alt=""></span>着物買取店検索
    </h2>
</div>
<div class="block-search__wrapper">
    <div class="block-content">
        <div class="block-search">
            <form role="search" action="<?php echo home_url('/'); ?>" class="search-form" method="get">
            <input type="hidden" name="s">
                <table>
                    <tbody>
                        <tr>
                            <td>
                                <select name="senmon" class="pulldowndesign">
                                    <option value="0">着物専門</option>
                                    <option value="あり">あり</option>
                                    <option value="なし">なし</option>
                                </select>
                            </td>
                            <td>
                                <select name="speed" class="pulldowndesign">
                                    <option value="0">買取までの速さ</option>
                                    <option value="3">★★★</option>
                                    <option value="2">★★</option>
                                    <option value="1">★</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <select name="syuttyou" class="pulldowndesign">
                                <option value="0">出張買取</option>
                                <option value="1">あり</option>
                                <option value="2">なし</option>
                            </select>
                            </td>
                            <td>
                            <select name="genkin" class="pulldowndesign">
                                <option value="0">現金受取り</option>
                                <option value="あり">あり</option>
                                <option value="なし">なし</option>
                            </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <select name="denwa" class="pulldowndesign">
                                <option value="0">事前の電話相談</option>
                                <option value="あり">あり</option>
                                <option value="なし">なし</option>
                            </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <button class="block-button" type="submit">
                    <div class="block-button__item">
                        <h2 class="mid-txt">この条件で検索</h2>
                    </div>
                </button>
            </form>
        </div>
    </div>
</div>